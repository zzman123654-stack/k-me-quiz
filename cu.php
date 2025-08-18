<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Click Heart</title>
<style>
    body {
        background-image: url(DSC05415.JPG);
        background-size: cover;  
        background-repeat: no-repeat; 
        height: 100vh;
        margin: 0;
        overflow: hidden;
        cursor: pointer;
    }

    .heart {
        position: absolute;
        width: 20px;
        height: 20px;
        background-color: red;
        transform: rotate(-45deg);
        animation: floatUp 1s forwards;
        pointer-events: none;
    }

    .heart::before,
    .heart::after {
        content: "";
        position: absolute;
        width: 20px;
        height: 20px;
        background-color: red;
        border-radius: 50%;
    }

    .heart::before {
        top: -10px;
        left: 0;
    }

    .heart::after {
        left: 10px;
        top: 0;
    }

    @keyframes floatUp {
        0% {
            transform: translate(-50%, -50%) scale(1) rotate(-45deg);
            opacity: 1;
        }
        100% {
            transform: translate(-50%, -150%) scale(1.5) rotate(-45deg);
            opacity: 0;
        }
    }
</style>
</head>
<body>

<script>
document.addEventListener('click', function(e) {
    const heart = document.createElement('div');
    heart.classList.add('heart');
    heart.style.left = e.clientX + 'px';
    heart.style.top = e.clientY + 'px';
    document.body.appendChild(heart);

    setTimeout(() => {
        heart.remove();
    }, 1000); // หลัง animation จบ ลบหัวใจ
});
</script>

</body>
</html>
