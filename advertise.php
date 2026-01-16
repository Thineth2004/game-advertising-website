<!DOCTYPE html>
<html en="lang">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/advertise.css">
        <title>Galaari Advertising Page - Advertise Your Games Here</title>
    </head>
    <body>
        <header class="advertise-hero">
            <h1>Advertise Your Game</h1>
            <p>Reach thousands of gamers by showcasing your game on Galaari</p>
        </header>
        <main>
            <section class="advertise-form">
                <form>
                    <div class="form-group">
                        <label>Game Title</label>
                        <input type="text" placeholder="Game title" required>
                    </div>
                    <div class="form-group">
                        <label>Genre</label>
                        <select>
                            <option>Action</option>
                            <option>RPG</option>
                            <option>Strategy</option>
                            <option>Racing</option>
                            <option>Horror</option>
                            <option>Indie</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Price ($)</label>
                        <input type="text" step="0.01" placeholder="xx.xx" required>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea rows="4" placeholder="Short description of your game"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Game Cover Image</label>
                        <input type="file">
                    </div>
                    <button class="submit-btn">Submit Advertisement</button>
                </form>
            </section>
        </main>
    </body>
</html>