# Adding Hero Background Image

## How to Add Your Background Image

1. **Save your background image:**
   - Save your image as `hero-background.jpg` in the same folder as `index.html`
   - Recommended size: 1920x1080 pixels (or similar high-resolution)
   - Supported formats: JPG, PNG, WebP

2. **Image requirements:**
   - High resolution for crisp display on all devices
   - Good contrast with text overlay
   - Library-themed images work best (books, reading areas, library interior)

## Background Image Features

### **Professional Styling:**
- **Dark overlay**: 40% black overlay for text readability
- **Color tint**: Subtle brown/gold gradient overlay for brand consistency
- **Responsive**: Automatically adjusts for different screen sizes
- **Performance**: Optimized with `background-size: cover` for fast loading

### **Text Readability:**
- Dark overlay ensures white text is always readable
- Text shadows for additional contrast
- Backdrop blur effects on stats container

## Customization Options

### **Adjust Overlay Opacity:**
```css
.hero {
    background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), 
                url('hero-background.jpg') center/cover no-repeat;
}
```
Change `0.4` to adjust darkness (0.0 = no overlay, 1.0 = completely black)

### **Change Color Tint:**
```css
.hero::before {
    background: linear-gradient(135deg, rgba(139, 69, 19, 0.3) 0%, rgba(212, 175, 55, 0.2) 50%, rgba(139, 69, 19, 0.3) 100%);
}
```
Adjust the RGBA values to change the color tint

### **Different Background Positions:**
```css
.hero {
    background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), 
                url('hero-background.jpg') center/cover no-repeat;
}
```
Change `center` to `top`, `bottom`, `left`, or `right` for different positioning

## Suggested Image Types

### **Library Interior:**
- Reading areas with books
- Study spaces with natural light
- Modern library architecture
- Bookshelves and reading nooks

### **Educational Themes:**
- Students studying
- Books and learning materials
- Knowledge and wisdom symbols
- Academic environments

### **Community Focus:**
- People reading together
- Family-friendly library spaces
- Community events and activities
- Diverse groups learning

## File Structure
```
your-website/
├── index.html
├── styles.css
├── script.js
├── logo.png
├── hero-background.jpg    ← Your background image
└── README-HERO-BACKGROUND.md
```

## Performance Tips

1. **Optimize image size**: Compress your image to reduce file size
2. **Use WebP format**: For better compression (update CSS accordingly)
3. **Consider multiple sizes**: For different screen resolutions
4. **Test loading speed**: Ensure the image loads quickly

## Mobile Considerations

The background image automatically:
- Scales to fit mobile screens
- Maintains aspect ratio
- Provides good text readability
- Loads efficiently on slower connections

## Need Help?

If you need assistance with image optimization or custom styling, feel free to ask!

