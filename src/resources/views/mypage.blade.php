<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>マイページ</title>
    <link rel="stylesheet" href="{{asset('css/mypage.css')}}" />
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}" />
</head>

<body>
    <header class="header">
        <img src="logo.svg" alt="COACHTECHロゴ" class="logo" />
        <div class="header-search">
            <input type="text" placeholder="なにをお探しですか？" />
        </div>
        <div class="header-links">
            <a href="#" class="logout-btn">ログアウト</a>
            <a href="#" class="mypage-btn">マイページ</a>
            <a href="#" class="header-btn">出品</a>
        </div>
    </header>

    <main>
        <div class="main-container">
            <!-- ユーザー情報 -->
            <div class="profile">
                <div class="profile-image"></div>
                <div class="profile-details">
                    <p class="username">ユーザー名</p>
                    <button class="edit-profile-btn">プロフィールを編集</button>
                </div>
            </div>

            <!-- タブメニュー -->
            <nav class="tabs">
                <ul>
                    <li><a href="#" class="active">出品した商品</a></li>
                    <li><a href="#">購入した商品</a></li>
                </ul>
            </nav>

            <!-- 商品リスト -->
            <div class="product-list">
                <div class="product-item">
                    <div class="product-image">商品画像</div>
                    <p class="product-name">商品名</p>
                </div>
                <div class="product-item">
                    <div class="product-image">商品画像</div>
                    <p class="product-name">商品名</p>
                </div>
                <div class="product-item">
                    <div class="product-image">商品画像</div>
                    <p class="product-name">商品名</p>
                </div>
                <div class="product-item">
                    <div class="product-image">商品画像</div>
                    <p class="product-name">商品名</p>
                </div>
                <div class="product-item">
                    <div class="product-image">商品画像</div>
                    <p class="product-name">商品名</p>
                </div>
                <div class="product-item">
                    <div class="product-image">商品画像</div>
                    <p class="product-name">商品名</p>
                </div>
                <div class="product-item">
                    <div class="product-image">商品画像</div>
                    <p class="product-name">商品名</p>
                </div>
                <div class="product-item">
                    <div class="product-image">商品画像</div>
                    <p class="product-name">商品名</p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>