# Adding Your Company Logo

## How to Add Your Logo

1. **Replace the placeholder logo file:**
   - Save your logo as `logo.png` in the same folder as `index.html`
   - Recommended size: 200x200 pixels (or similar square/rectangular format)
   - Supported formats: PNG, JPG, SVG

2. **Update company information:**
   - In `index.html`, find and replace "Your Company Name" with your actual company name
   - Update the alt text for better accessibility

## Logo Placement

Your logo will appear in three locations:

### 1. Navigation Bar (Top)
- Size: 45px height (responsive)
- Position: Left side next to "Community Library" text
- Hover effect: Slight scale animation

### 2. Hero Section (Main Banner)
- Size: 120px height (responsive)
- Position: Above the book reader icon
- Effect: Drop shadow and hover animation

### 3. Footer
- Size: 40px height (responsive)
- Position: Next to "Community Library" heading
- Effect: White color filter for dark background

## Customization Options

### Logo Sizing
If you need to adjust logo sizes, edit these CSS classes in `styles.css`:

```css
/* Navigation logo */
.logo-img { height: 45px; }

/* Hero section logo */
.hero-logo { height: 120px; }

/* Footer logo */
.footer-logo-img { height: 40px; }
```

### Logo Styling
You can add custom styling to your logo:

```css
.logo-img {
    /* Add border */
    border: 2px solid #8b4513;
    border-radius: 8px;
    
    /* Add background */
    background: white;
    padding: 5px;
    
    /* Custom filter effects */
    filter: brightness(1.1) contrast(1.1);
}
```

## File Structure
```
your-website/
├── index.html
├── styles.css
├── script.js
├── logo.png          ← Your logo file
└── README-LOGO.md    ← This file
```

## Tips for Best Results

1. **Use high-resolution images** - The logo will scale down, so start with a larger image
2. **Transparent background** - PNG format with transparent background works best
3. **Simple design** - Clean, simple logos work better at small sizes
4. **Test responsiveness** - Check how your logo looks on mobile devices

## Need Help?

If you need assistance customizing the logo placement or styling, feel free to ask!

