<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>商品詳細</title>
    <link rel="stylesheet" href="detail.css" />
    <link rel="stylesheet" href="sanitize.css" />
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
        <div class="main">
            <div class="product-detail">
                <div class="product-image-section">
                    <div class="product-image-placeholder">商品画像</div>
                </div>
                <div class="product-info-section">
                    <h1 class="product-name">商品名がここに入る</h1>
                    <p class="product-brand">ブランド名</p>
                    <p class="product-price">¥47,000（税込）</p>
                    <div class="product-actions-icons">
                        <button class="like-button">❤️ いいね</button>
                        <button class="comment-button">💬 コメント</button>
                    </div>
                    <div class="product-actions">
                        <button class="buy-now-btn">購入手続きへ</button>
                    </div>
                    <section class="product-description">
                        <h2>商品説明</h2>
                        <p>カラー: グレー</p>
                        <p>商品本体の説明文です。色あせがありません。</p>
                        <p>高品質、持続性を保証します。</p>
                    </section>
                    <section class="product-info">
                        <h2>商品の情報</h2>
                        <p>カテゴリ: 家具, ランプ</p>
                        <p>商品の状態: 新品</p>
                    </section>
                    <section class="comments-section">
                        <h2>コメント (1)</h2>
                        <div class="comment">
                            <img src="user-icon.png" alt="admin" class="comment-avatar" />
                            <p class="comment-user">admin</p>
                            <p class="comment-text">こちらにコメントが入ります。</p>
                        </div>
                        <textarea
                            class="comment-input"
                            placeholder="商品へのコメント"></textarea>
                        <button class="comment-submit-btn">コメントを投稿する</button>
                    </section>
                </div>
            </div>
        </div>
    </main>
</body>

</html>