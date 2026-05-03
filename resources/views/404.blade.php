<!DOCTYPE html>
<html>
<head>
    <title>404 - Kamu Nyasar 😭</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: radial-gradient(circle, #0f2027, #203a43, #2c5364);
            color: white;
            font-family: 'Poppins', sans-serif;
            text-align: center;
            overflow: hidden;
        }

        h1 {
            font-size: 120px;
            margin-top: 60px;
            animation: glitch 1s infinite;
        }

        h2 {
            margin-top: -20px;
        }

        #typing {
            font-size: 18px;
            opacity: 0.8;
            height: 25px;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background: #00c9ff;
            color: black;
            text-decoration: none;
            border-radius: 25px;
            transition: 0.3s;
            font-weight: bold;
        }

        a:hover {
            background: #92fe9d;
        }

        /* 💥 glitch */
        @keyframes glitch {
            0% { text-shadow: 2px 2px red; }
            50% { text-shadow: -2px -2px cyan; }
            100% { text-shadow: 2px -2px lime; }
        }

        /* 💣 emoji jatuh */
        .falling {
            position: absolute;
            top: -50px;
            font-size: 30px;
            animation: fall linear infinite;
        }

        @keyframes fall {
            to {
                transform: translateY(110vh);
            }
        }

        /* 🎉 confetti */
        .confetti {
            position: absolute;
            width: 10px;
            height: 10px;
            background: white;
            animation: confettiFall 3s linear infinite;
        }

        @keyframes confettiFall {
            to {
                transform: translateY(100vh);
            }
        }

        button {
            margin-top: 15px;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            background: pink;
            cursor: pointer;
        }

        button:hover {
            background: hotpink;
        }

    </style>
</head>

<body>

    <h1>404</h1>
    <h2>😵 Kamu Nyasar!</h2>
    <div id="typing"></div>

    <a href="/">Balik ke Beranda</a>
    <br>
    <button onclick="prank()">Jangan Klik 😈</button>

    <!-- 💻 typing effect -->
    <script>
        const text = "Halaman ini tidak ditemukan... tapi kamu menemukan aku 😏";
        let i = 0;

        function typing() {
            if (i < text.length) {
                document.getElementById("typing").innerHTML += text.charAt(i);
                i++;
                setTimeout(typing, 40);
            }
        }
        typing();

        // 💣 emoji jatuh random
        function createFalling() {
            const el = document.createElement("div");
            el.classList.add("falling");
            el.innerHTML = ["💣","💥","😂","😭","🔥"][Math.floor(Math.random()*5)];
            el.style.left = Math.random() * window.innerWidth + "px";
            el.style.animationDuration = (Math.random()*3 + 2) + "s";
            document.body.appendChild(el);

            setTimeout(() => el.remove(), 5000);
        }

        setInterval(createFalling, 300);

        // 🎉 confetti
        function createConfetti() {
            const c = document.createElement("div");
            c.classList.add("confetti");
            c.style.left = Math.random() * window.innerWidth + "px";
            c.style.background = `hsl(${Math.random()*360},100%,50%)`;
            document.body.appendChild(c);

            setTimeout(() => c.remove(), 3000);
        }

        setInterval(createConfetti, 200);

        // 😈 tombol prank
        function prank() {
            alert("WKWKWK dibilang jangan klik 😭");
        }
    </script>

</body>
</html>