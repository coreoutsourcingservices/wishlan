# Adding Gallery Images

## How to Add Gallery Images

1. **Save your gallery images:**
   - Save your images as `gallery-1.jpg`, `gallery-2.jpg`, etc. in the same folder as `index.html`
   - Recommended size: 400x300 pixels (or similar 4:3 aspect ratio)
   - Supported formats: JPG, PNG, WebP

2. **Image requirements:**
   - High resolution for crisp display
   - Good lighting and composition
   - Library-themed images work best

## Gallery Features

### **Professional Layout:**
- **Responsive Grid**: Automatically adjusts to different screen sizes
- **Hover Effects**: Images scale and show overlay information
- **Smooth Animations**: Elegant transitions and effects
- **Modern Design**: Clean, professional appearance

### **Interactive Elements:**
- **Image Overlay**: Shows title and description on hover
- **Scale Effect**: Images zoom slightly on hover
- **Lift Effect**: Gallery items lift up on hover
- **Smooth Transitions**: All animations are smooth and professional

## Gallery Sections

The gallery includes 6 sections:

1. **Reading Area** - `gallery-1.jpg`
   - Comfortable seating for quiet reading
   - Show reading nooks, chairs, and tables

2. **Children's Section** - `gallery-2.jpg`
   - Bright and colorful space for young readers
   - Show children's books, toys, and colorful furniture

3. **Study Rooms** - `gallery-3.jpg`
   - Private spaces for focused learning
   - Show individual study carrels or small rooms

4. **Computer Lab** - `gallery-4.jpg`
   - Modern technology for digital learning
   - Show computers, monitors, and tech equipment

5. **Book Collection** - `gallery-5.jpg`
   - Extensive collection of books and resources
   - Show bookshelves, book displays, or library stacks

6. **Community Events** - `gallery-6.jpg`
   - Regular programs and workshops
   - Show people in programs, events, or group activities

## File Structure
```
your-website/
├── index.html
├── styles.css
├── script.js
├── paushala-logo.png
├── hero-background.jpg
├── gallery-1.jpg    ← Reading Area
├── gallery-2.jpg    ← Children's Section
├── gallery-3.jpg    ← Study Rooms
├── gallery-4.jpg    ← Computer Lab
├── gallery-5.jpg    ← Book Collection
├── gallery-6.jpg    ← Community Events
└── README-GALLERY.md
```

## Customization Options

### **Gallery Layout:**
```css
.gallery-grid {
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}
```
Change `300px` to adjust minimum column width

### **Image Heights:**
```css
.gallery-item {
    height: 250px;
}
```
Adjust height for different aspect ratios

### **Overlay Styling:**
```css
.gallery-overlay h3 {
    color: #d4af37;  /* Gold color for titles */
}

.gallery-overlay {
    background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
}
```

## Responsive Design

### **Desktop (1200px+):**
- 3-4 columns grid layout
- 250px height images
- Full overlay effects

### **Tablet (768px-1199px):**
- 2-3 columns grid layout
- 200px height images
- Optimized spacing

### **Mobile (below 768px):**
- Single column layout
- 180px height images
- Compact overlay text

## Tips for Best Results

1. **Use high-quality images** - Sharp, well-lit photos work best
2. **Consistent aspect ratio** - 4:3 or 16:9 works well
3. **Good lighting** - Well-lit spaces photograph better
4. **Library context** - Show actual library spaces and activities
5. **People in photos** - Include people using the library when possible

## Image Suggestions

### **Reading Areas:**
- Comfortable chairs and tables
- Natural lighting from windows
- Quiet, peaceful atmosphere
- People reading books

### **Children's Section:**
- Colorful furniture and decorations
- Children's books and toys
- Bright, welcoming environment
- Kids engaged in activities

### **Study Rooms:**
- Individual study carrels
- Quiet, focused environment
- Students working on computers
- Group study tables

### **Computer Lab:**
- Modern computers and monitors
- Clean, organized workspace
- People using technology
- Digital learning resources

### **Book Collection:**
- Rows of bookshelves
- Book displays and exhibits
- Library catalog systems
- Staff organizing books

### **Community Events:**
- People in workshops or programs
- Group activities and discussions
- Event spaces and meeting rooms
- Community engagement

## Need Help?

If you need assistance with image optimization, layout adjustments, or adding more gallery items, feel free to ask!

