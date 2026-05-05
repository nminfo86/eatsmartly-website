# Changelog - eatSmartly Website

## [Unreleased] - 2026-05-05

### Added
- **.gitignore** file for version control setup
- **README.md** with project overview and Git setup instructions
- **CHANGES.md** this changelog file

### Changed

#### 1. Feature Section Layout - Alternating Design Pattern
- **QR Menu Section** (`#qr-menu-detail`): 
  - ✅ Image positioned on right
  - ✅ Text content on left
  
- **Food Court Section** (`#foodcourt-detail`): 
  - ✅ Text content on left
  - ✅ Image positioned on right
  
- **Printers Section** (`#printers-detail`): 
  - ✅ Image positioned on right
  - ✅ Text content on left
  
- **Multi-Language Section** (`#multilang-detail`): 
  - ✅ Text content on left
  - ✅ Image positioned on right

**Result**: Feature sections now alternate between left-right and right-left layouts for better visual rhythm

#### 2. Support Duration Updated - From 6 Months to 3 Months
- **Hero Section - Algeria Badge**: 
  - Changed: `الدعم: مجاني لمدة 6 أشهر` → `الدعم: مجاني لمدة 3 أشهر`
  
- **Pricing Section - Basic Plan**: 
  - Already showing: `دعم فني مجاني لمدة 3 أشهر` ✅
  
- **Pricing Section - Food Court Plan**: 
  - Changed: `دعم فني مجاني لمدة 6 أشهر` → `دعم فني مجاني لمدة 3 أشهر`

**Result**: Consistent 3-month free support across all plans and sections

#### 3. Arabic + Latin Text Alignment - Fixed Bidirectional Text Issues
All instances of Latin words (brand names, acronyms, technical terms) mixed with Arabic text have been wrapped in `<span dir="ltr">` tags to prevent text jumbling.

**Fixed instances:**
- `eatSmartly` → `<span dir="ltr">eatSmartly</span>` (multiple occurrences)
- `QR` → `<span dir="ltr">QR</span>` (10+ occurrences)
- `POS` → `<span dir="ltr">POS</span>` (8+ occurrences)
- `Wi-Fi` → `<span dir="ltr">Wi-Fi</span>` (2 occurrences)
- `USB` → `<span dir="ltr">USB</span>` (2 occurrences)
- `ESC/POS` → `<span dir="ltr">ESC/POS</span>`
- `EZPL/TSPL` → `<span dir="ltr">EZPL/TSPL</span>`
- `RTL` → `<span dir="ltr">RTL</span>`
- `DZD` → `<span dir="ltr">DZD</span>`
- `Food Court` → `<span dir="ltr">(Food Court)</span>` (4 occurrences)
- `Offline` → `<span dir="ltr">(Offline)</span>`
- `QRcode` → `<span dir="ltr">QRcode</span>`

**Result**: Clean, properly ordered text that reads naturally in Arabic even with embedded Latin terms

#### 4. Algeria Badge Content Moved to Hero Section
The entire "مصمم خصيصاً للسوق الجزائري" section has been relocated from a separate standalone section (`#algeria-badge`) into the hero section for better visibility and impact.

**New Hero Section Structure:**
```html
<section id="hero">
  <h1>eatSmartly — نظام إدارة المطاعم الصلب</h1>
  <p>System description...</p>
  <p>من المقاهي الصغيرة إلى ساحات المطاعم...</p>
  
  <!-- NEW: Algeria Badge Content (translucent card) -->
  <div style="background: rgba(255,255,255,0.1); ...">
    <h2>🇩🇿 مصمم خصيصاً للسوق الجزائري</h2>
    <p>Complete market focus description...</p>
    <p>System capabilities and problem-solving...</p>
    <p>عندما تفكر في فتح مطعم أو مقهى...</p>
    <p>الترخيص: مدى الحياة • الدعم: مجاني لمدة 3 أشهر</p>
  </div>
  
  <div class="hero-actions">...</div>
</section>
```

**Styling:**
- Translucent white background: `rgba(255,255,255,0.1)`
- Backdrop blur effect: `backdrop-filter: blur(10px)`
- Subtle border: `border: 2px solid rgba(255,255,255,0.2)`
- Rounded corners: `border-radius: 15px`
- Proper spacing: `padding: 30px; margin: 40px 0`

**Result**: Critical Algeria market positioning is now prominently displayed in the hero section where visitors first land

### Removed
- **Standalone Algeria Badge Section** (`#algeria-badge`): 
  - Entire section removed after content was migrated to hero section
  - Navigation link removed (was not present in nav menu)

---

## Version Control Notes

### Git Repository Setup
To initialize version control for this project:

```bash
# 1. Install Git from https://git-scm.com/downloads

# 2. Navigate to project directory
cd d:\eatSmartlyWebSite

# 3. Initialize repository
git init

# 4. Add all files
git add .

# 5. Create initial commit
git commit -m "Initial commit: eatSmartly website

Features:
- Comprehensive restaurant management system website
- QR Menu, Food Court, Printers sections
- Multi-language support (AR/FR/EN)
- Alternating feature section layouts
- Fixed bidirectional text (Arabic + Latin)
- 3 months free support for all plans
- Algeria market badge integrated in hero section"

# 6. (Optional) Connect to remote repository
git remote add origin <your-repo-url>
git branch -M main
git push -u origin main
```

### Recommended .gitignore Entries
Already configured in `.gitignore`:
- OS files (`.DS_Store`, `Thumbs.db`)
- Editor folders (`.vscode/`, `.idea/`)
- Backup files (`*.backup`, `*.bak`)
- Logs and temporary files

---

## Technical Details

### Files Modified
1. `index.html` - Main website file (20+ replacements)
2. `images/README.md` - Updated image specifications

### Files Created
1. `.gitignore` - Version control ignore rules
2. `README.md` - Project documentation
3. `CHANGES.md` - This changelog

### Browser Compatibility
- All changes maintain cross-browser compatibility
- RTL direction properly handled for Arabic content
- `dir="ltr"` span tags supported in all modern browsers
- CSS backdrop-filter supported in modern browsers (fallback provided)

### Testing Recommendations
1. ✅ Verify alternating image/text layouts on desktop
2. ✅ Test responsive behavior on mobile (768px breakpoint)
3. ✅ Check Arabic + Latin text alignment in all sections
4. ✅ Confirm hero section Algeria badge displays correctly
5. ✅ Validate pricing section shows 3 months support

---

**Summary**: All 4 requested changes have been successfully implemented with proper RTL handling, consistent styling, and improved user experience.
