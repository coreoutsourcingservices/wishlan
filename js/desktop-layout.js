/* Keep the complete desktop page proportional to a 1366px laptop layout.
 * Browser zoom changes innerWidth; compensating scale keeps the desktop design fitted.
 * Touch devices and narrow windows retain the original responsive layout.
 */
(function () {
    'use strict';
    const root = document.documentElement;
    const desktopInput = window.matchMedia('(hover: hover) and (pointer: fine)');
    const originalMedia = new WeakMap();
    const referenceWidth = 1366;
    let pending = false;

    function updateMedia(rules, scale) {
        for (const rule of rules) {
            if (rule.type === CSSRule.MEDIA_RULE) {
                if (!originalMedia.has(rule)) originalMedia.set(rule, rule.media.mediaText);
                const original = originalMedia.get(rule);
                // Media queries use viewport pixels before CSS zoom. Scale their width
                // thresholds too, so every section selects the same laptop breakpoint.
                function scaledLength(_, prefix, value, unit) {
                    return prefix + (Number(value) * scale).toFixed(4) + unit;
                }
                rule.media.mediaText = original
                    .replace(/(\b(?:min|max)-width\s*:\s*)([\d.]+)(px|em|rem)\b/gi, scaledLength)
                    .replace(/(\bwidth\s*(?:>=|<=|>|<|=)\s*)([\d.]+)(px|em|rem)\b/gi, scaledLength)
                    .replace(/([\d.]+)(px|em|rem)(\s*(?:>=|<=|>|<|=)\s*width\b)/gi,
                        function (_, value, unit, suffix) {
                            return (Number(value) * scale).toFixed(4) + unit + suffix;
                        });
            }
            if (rule.cssRules) updateMedia(rule.cssRules, scale);
        }
    }

    function fitDesktop() {
        pending = false;
        const active = desktopInput.matches && window.screen.width >= 1024 && window.innerWidth >= 700;
        // clientWidth excludes the vertical scrollbar, avoiding a horizontal
        // scrollbar caused by fitting to the wider outer viewport.
        const availableWidth = root.clientWidth || window.innerWidth;
        const scale = active ? availableWidth / referenceWidth : 1;
        root.classList.toggle('desktop-layout', active);
        if (active) root.style.setProperty('--desktop-layout-scale', String(scale));
        else root.style.removeProperty('--desktop-layout-scale');
        for (const sheet of document.styleSheets) {
            try { updateMedia(sheet.cssRules, scale); }
            catch (error) {
                // Cross-origin stylesheets cannot be inspected; leave them unchanged.
                if (error.name !== 'SecurityError') throw error;
            }
        }
    }

    function scheduleFit() {
        if (!pending) { pending = true; window.requestAnimationFrame(fitDesktop); }
    }
    window.addEventListener('resize', scheduleFit);
    window.addEventListener('load', scheduleFit);
    desktopInput.addEventListener('change', scheduleFit);
    fitDesktop();
}());
