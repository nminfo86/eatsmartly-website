<?php
// Detect current page for active nav highlighting
$currentPage = basename($_SERVER['SCRIPT_FILENAME']);
?>
<header>
    <a href="index.php" class="logo">
        <img src="images/eatSmartly_logo.png" alt="eatSmartly Logo">
        <span>eatSmartly</span>
    </a>
    <nav>
        <ul>
            <li>
                <a href="index.php"
                   <?= $currentPage === 'index.php' ? 'class="active-page"' : '' ?>>
                   الرئيسية
                </a>
            </li>
            <li>
                <a href="scenarios.php"
                   <?= $currentPage === 'scenarios.php' ? 'class="active-page"' : '' ?>>
                   أوضاع التشغيل
                </a>
            </li>
            <li>
                <a href="documentation.php"
                   <?= $currentPage === 'documentation.php' ? 'class="active-page"' : '' ?>>
                   التوثيق
                </a>
            </li>
            <li>
                <a href="changelog.php"
                   <?= $currentPage === 'changelog.php' ? 'class="active-page"' : '' ?>>
                   سجل التغييرات
                </a>
            </li>
            <li>
                <a href="index.php#contact">اتصل بنا</a>
            </li>
        </ul>
    </nav>
    <a href="index.php#download" class="btn">حمل النسخة التجريبية</a>
</header>
