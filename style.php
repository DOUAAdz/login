/* Import Google Font */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

/* Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* Background with glowing effect */
body {
    background: url("big.jpg") no-repeat center center fixed;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    animation: glow 5s infinite alternate;
}

/* Glowing effect */
@keyframes glow {
    from {
        filter: brightness(1);
    }
    to {
        filter: brightness(1.2);
    }
}

/* Wrapper with fade-in animation */
.wrapper {
    background: rgba(0, 0, 0, 0.8);
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.5);
    text-align: center;
    width: 350px;
    animation: fadeIn 1.5s ease-in-out;
}

/* Fade-in animation */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Title */
.wrapper h1 {
    color: white;
    font-size: 26px;
    margin-bottom: 15px;
    animation: slideIn 1s ease-in-out;
}

/* Slide-in animation */
@keyframes slideIn {
    from {
        transform: translateX(-30px);
    }
    to {
        transform: translateX(0);
    }
}

/* Error Message */
.error {
    color: #ff5e62;
    font-size: 14px;
    margin-bottom: 15px;
}

/* Input fields */
.input-group {
    margin-bottom: 15px;
    text-align: left;
}

.input-group label {
    color: white;
    font-size: 14px;
    display: block;
    margin-bottom: 5px;
}

.input-group input {
    width: 100%;
    height: 40px;
    padding: 8px;
    border: none;
    border-radius: 5px;
    background: rgba(255, 255, 255, 0.9);
    font-size: 14px;
    transition: all 0.3s ease;
}

/* Input animation when focused */
.input-group input:focus {
    background: white;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
    transform: scale(1.05);
}

/* Button container */
.btn-container {
    margin-top: 15px;
}

/* Button with bounce effect */
.btn-container button {
    width: 100%;
    height: 45px;
    border: none;
    border-radius: 5px;
    background: linear-gradient(to right, #ff5e62, #ff9966);
    color: white;
    font-weight: bold;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
}

/* Hover effect */
.btn-container button:hover {
    box-shadow: 2px 2px 15px rgba(255, 94, 98, 0.6);
    transform: scale(1.05);
}

/* Button bounce animation */
@keyframes bounce {
    0%, 100% {
        transform: translateY(0);
    }
}
