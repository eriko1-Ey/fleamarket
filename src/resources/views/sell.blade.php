<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>商品の出品</title>
    <link rel="stylesheet" href="{{asset('css/sell.css')}}" />
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
            <h1>商品の出品</h1>
            <form class="product-form">
                <div class="form-group">
                    <label for="product-image" class="form-label">商品画像</label>
                    <div class="image-upload">
                        <button type="button" class="upload-btn">画像を選択する</button>
                    </div>
                </div>
                <div class="form-group">
                    <h2 class="form-section">商品の詳細</h2>
                    <div class="categories">
                        <label class="form-label">カテゴリー</label>
                        <div class="category-buttons">
                            <button class="category-button">ファッション</button>
                            <button class="category-button">家電</button>
                            <button class="category-button active">インテリア</button>
                            <button class="category-button">レディース</button>
                            <button class="category-button">メンズ</button>
                            <button class="category-button">コスメ</button>
                            <button class="category-button">本</button>
                            <button class="category-button">ゲーム</button>
                            <button class="category-button">スポーツ</button>
                            <button class="category-button">キッチン</button>
                            <button class="category-button">ハンドメイド</button>
                            <button class="category-button">アクセサリー</button>
                            <button class="category-button">おもちゃ</button>
                            <button class="category-button">ベビー・キッズ</button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="product-condition" class="form-label">商品の状態</label>
                    <select id="product-condition" class="form-select">
                        <option value="">選択してください</option>
                        <option value="#">良好</option>
                        <option value="#">目立った傷や汚れなし</option>
                        <option value="#">やや傷や汚れあり</option>
                        <option value="#">状態が悪い</option>
                    </select>
                </div>
                <div class="form-group">
                    <h2 class="form-section">商品名と説明</h2>
                    <label for="product-name" class="form-label">商品名</label>
                    <input
                        type="text"
                        id="product-name"
                        class="form-input"
                        placeholder="商品名" />
                    <label for="brand-name" class="form-label">ブランド名</label>
                    <input
                        type="text"
                        id="brand-name"
                        class="form-input"
                        placeholder="ブランド名" />
                    <label for="product-name" class="form-label">商品の説明</label>
                    <textarea
                        id="product-description"
                        class="form-textarea"
                        placeholder="商品の説明"></textarea>
                </div>
                <div class="form-group">
                    <label for="price" class="form-label">販売価格</label>
                    <input type="text" id="price" class="form-input" placeholder="¥" />
                </div>
                <div class="form-group">
                    <button type="submit" class="submit-btn">出品する</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>