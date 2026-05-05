# eatSmartly Website

نظام إدارة المطاعم الذكي - موقع الويب الرسمي

## 📋 About

This is the official website for eatSmartly, a comprehensive restaurant management system designed specifically for the Algerian market. The website showcases all features including:

- QR Digital Menu System
- Food Court Multi-Restaurant Support
- Kitchen Printers and Ticket System
- Multi-Language Support (Arabic RTL, French, English)
- Multi-Currency Support (DZD)
- 4 Operational Scenarios

## 🌐 Version Control Setup

Since Git is not currently installed on your system, follow these steps to set up version control:

### 1. Install Git

Download and install Git from: https://git-scm.com/downloads

### 2. Initialize Repository

After installing Git, open a terminal in the project directory and run:

```bash
git init
git add .
git commit -m "Initial commit: eatSmartly website with comprehensive features"
```

### 3. Create Remote Repository (Optional)

If you want to push to GitHub/GitLab:

```bash
# Add remote repository
git remote add origin <your-repository-url>

# Push to remote
git branch -M main
git push -u origin main
```

## 📂 Project Structure

```
eatSmartlyWebSite/
├── index.html                  # Main website file
├── images/                     # Images folder
│   ├── README.md               # Image specifications
│   ├── eatSmartly_logo.png     # Logo file
│   └── gallery/                # UI screenshots folder
├── Documentation/
│   └── COMPREHENSIVE_FEATURES.md  # Complete features documentation
├── .gitignore                  # Git ignore rules
└── README.md                   # This file
```

## ✅ Recent Changes (May 5, 2026)

### 1. Alternating Layout for Feature Sections
- **QR Menu Section**: Image on right, text on left
- **Food Court Section**: Text on left, image on right  
- **Printers Section**: Image on right, text on left
- **Multi-Language Section**: Text on left, image on right

### 2. Support Duration Updated
Changed from 6 months to 3 months:
- Basic Plan: 3 months free support
- Food Court Plan: 3 months free support
- Updated in Hero section Algeria badge
- Updated in Pricing section

### 3. Fixed Arabic + Latin Text Alignment
All Latin words (QR, POS, WiFi, USB, etc.) are now wrapped in `<span dir="ltr">` tags to prevent text jumbling when mixed with Arabic text.

Examples:
- ✅ `رمز <span dir="ltr">QR</span> خاص`
- ✅ `نظام <span dir="ltr">POS</span> متقدم`
- ✅ `شبكة <span dir="ltr">Wi-Fi</span> محلية`

### 4. Moved Algeria Badge to Hero Section
The important "مصمم خصيصاً للسوق الجزائري" content has been integrated into the hero section with a beautiful translucent card design that includes:
- Market focus description
- Development philosophy
- "عندما تفكر في فتح مطعم أو مقهى، فكر أولاً في eatSmartly!"
- License and support information

## 📸 Required Images

Check `images/README.md` for complete specifications of all 17 required images:
- 1 hero image (1400x800px)
- 4 feature detail images (600x500px each)
- 6 feature card images
- 6 gallery screenshots (600x400px each)

## 🎨 Design Features

- **Colors**: Primary #0b7a61 (green), Accent #e74c3c (red)
- **Font**: Tajawal (Google Fonts) - 400, 700, 800
- **Direction**: RTL (Right-to-Left) for Arabic
- **Responsive**: Mobile breakpoint at 768px
- **Style**: AnyDesk-inspired professional design

## 📝 License

Copyright © 2026 - eatSmartly. All rights reserved.

## 📞 Contact

For inquiries, use the contact form on the website or reach out through the provided channels.

---

**Note**: This project is ready for version control. Please install Git and follow the setup instructions above.
