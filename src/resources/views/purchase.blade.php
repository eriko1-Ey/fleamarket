<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>購入画面 | COACHTECH</title>
    <link rel="stylesheet" href="purchase.css" />
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
            <div class="purchase-container">
                <div class="left-section">
                    <div class="product-detail">
                        <div class="product-image">商品画像</div>
                        <div class="product-info">
                            <h1 class="product-name">商品名</h1>
                            <p class="product-price">¥ 47,000</p>
                        </div>
                    </div>
                    <hr />
                    <section class="payment-method">
                        <h2>支払い方法</h2>
                        <select>
                            <option value="" disabled selected>選択してください</option>
                            <option value="credit-card">カード払い</option>
                            <option value="convenience-store">コンビニ払い</option>
                        </select>
                    </section>
                    <hr />
                    <section class="delivery-address">
                        <h2>配送先</h2>
                        <p>〒 XXX-YYYY<br />ここには住所と建物が入ります</p>
                        <a href="#" class="change-link">変更する</a>
                    </section>
                </div>
                <div class="right-section">
                    <div class="summary-box">
                        <div class="summary-item">
                            <p>商品代金</p>
                            <p>¥ 47,000</p>
                        </div>
                        <div class="summary-item">
                            <p>支払い方法</p>
                            <p>コンビニ払い</p>
                        </div>
                    </div>
                    <button class="purchase-btn">購入する</button>
                </div>
            </div>
        </div>
    </main>
</body>

</html>