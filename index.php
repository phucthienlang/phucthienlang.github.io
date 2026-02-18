<?php
require_once dirname(__DIR__, 1) . '/_super-root/includes/protection_helper.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/x-icon" href="./img/iCon.ico">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mời Phúc Thiên Lang 1 Cốc Cafe</title>
  <meta name="description" content="Mời Phúc Thiên Lang 1 Cốc Cafe" />
  <meta property="og:title" content="Mời Phúc Thiên Lang 1 Cốc Cafe" />
  <meta property="og:description" content="Mời Phúc Thiên Lang 1 Cốc Cafe" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://donate.phucthienlang.vn" />
  <meta property="og:image" content="https://donate.phucthienlang.vn/img/PTL.png" />
  <style>
    * {
      box-sizing: border-box;
    }
    .mt-1 {
      margin-top: 1rem;
    }
    a {
      text-decoration: none;
    }
    html, body {
      padding: 0;
      margin: 0;
      font-size: 100%;
      font-family: Arial, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto,
        Helvetica, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji',
        'Segoe UI Symbol';
      background: #fff;
    }
    html, body, .donate-page {
      width: 100%;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      background: #fff;
    }
    .donate-page-background {
      display: none;
    }
    .donate-card {
      width: fit-content;
      max-width: 90%;
      padding: 25px;
      background: linear-gradient(135deg, #fff9f5 0%, #f8f9fa 100%);
      border-radius: 16px;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
      text-align: center;
      position: relative;
      overflow: hidden;
    }
    .donate-card-title {
      font-size: 1.8rem;
      font-weight: bold;
      color: #ff5e62;
      margin-bottom: 1rem;
      text-shadow: 0 2px 4px rgba(255, 94, 98, 0.2);
      white-space: nowrap;
    }
    .donate-card-subtitle {
      font-size: 1rem;
      color: #666;
      margin-bottom: 1.5rem;
      line-height: 1.6;
    }
    .donate-card-bank {
      background: #fff;
      padding: 15px;
      border-radius: 12px;
      margin-bottom: 1rem;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
      text-align: left;
    }
    .donate-card-bank-name {
      font-size: 1.1rem;
      font-weight: bold;
      color: #2c3e50;
      margin-bottom: 0.5rem;
    }
    .donate-card-bank-name.tcb {
      color: #e74c3c;
    }
    .donate-card-bank-name.scb {
      color: #3498db;
    }
    .donate-card-bank-account {
      font-size: 1rem;
      color: #555;
      font-family: 'Courier New', monospace;
    }
    .donate-card-poster {
      width: 100%;
      max-width: 300px;
      height: auto;
      border-radius: 12px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
      margin: 1rem auto;
      display: block;
    }
    .bank {
      display: block;
      padding: 12px;
      margin: 0.5rem 0;
      background: rgba(255, 255, 255, 0.8);
      border-radius: 8px;
      font-size: 0.9rem;
      color: #555;
    }
    .bank.info {
      color: #3498db;
      font-weight: 500;
    }
    .donate-card {
      border: 2px solid #ff5e62;
      box-shadow: 0 4px 30px rgba(255, 94, 98, 0.2);
      transition: all 0.3s ease;
    }
    .donate-card:hover {
      box-shadow: 0 6px 40px rgba(255, 94, 98, 0.3);
      transform: translateY(-3px);
    }
    .bank-info-container {
      display: flex;
      flex-direction: column;
      gap: 12px;
      margin-bottom: 15px;
      width: 100%;
    }
    .bank-group {
      display: flex;
      flex-direction: column;
      gap: 8px;
      width: 100%;
    }
    .bank {
      color: #2c3e50; 
      font-weight: bold; 
      font-size: 14px;
      padding: 10px 12px;
      background: rgba(255, 255, 255, 0.9);
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
      text-align: center;
      cursor: pointer;
      display: block;
      width: 100%;
    }
    .bank:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 15px rgba(255, 94, 98, 0.3);
    }
    .bank:active {
      transform: translateY(0);
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
    }
    .bank.tcb {
      color: #e74c3c;
      border-left: 4px solid #e74c3c;
    }
    .bank.scb {
      color: #3498db;
      border-left: 4px solid #3498db;
    }
    .bank.info {
      background: linear-gradient(135deg, #f89521 0%, #ff5e62 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      border-left: 4px solid #ff5e62;
      font-size: 16px;
      text-align: center;
    }
    .donate-card-poster {
      width: 240px;
      height: 240px;
      margin: 15px auto;
      display: block;
      border: 3px solid #ff5e62;
      border-radius: 12px;
      padding: 10px;
      background: white;
      box-shadow: 0 4px 20px rgba(255, 94, 98, 0.2);
      transition: all 0.3s ease;
    }
    .donate-card-poster:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 30px rgba(255, 94, 98, 0.35);
    }
    .donate-button {
      display: flex;
      justify-content: center;
      width: 100%;
      border-radius: 12px;
      height: 52px;
      align-items: center;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(0,0,0,0.15);
      border: 2px solid transparent;
      position: relative;
      overflow: hidden;
      text-decoration: none;
      margin-bottom: 12px;
    }
    .donate-button::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 0;
      height: 0;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.3);
      transform: translate(-50%, -50%);
      transition: width 0.6s, height 0.6s;
    }
    .donate-button:hover::before {
      width: 400px;
      height: 400px;
    }
    .donate-button:hover {
      box-shadow: 0 6px 25px rgba(0,0,0,0.25);
      transform: translateY(-3px) scale(1.02);
    }
    .donate-button.paypal {
      background: linear-gradient(135deg, #003087 0%, #002466 100%);
      border-color: #003087;
    }
    .donate-button.paypal img {
      height: 28px;
      filter: brightness(0) invert(1);
    }
    .donate-button.momo {
      background: linear-gradient(135deg, #A50064 0%, #7a004b 100%);
      border-color: #A50064;
    }
    .donate-button.momo svg {
      padding: 5px;
      height: 50px;
    }
    .donate-method-label {
      background: linear-gradient(90deg, transparent 0%, #ff5e62 50%, transparent 100%);
      height: 3px;
      margin-top: 1.5rem;
      margin-bottom: 2rem;
      border: none;
      box-shadow: 0 1px 8px rgba(255, 94, 98, 0.3);
    }
    .ref-links-container {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 20px;
      flex-wrap: nowrap;
      margin-top: 1rem;
    }
    .ref-link {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      transition: all 0.3s ease-in-out;
      text-decoration: none;
    }
    .ref-link img {
      width: 50px;
      height: 50px;
      object-fit: contain;
      transition: all 0.3s ease-in-out;
    }
    .ref-link:hover {
      transform: translateY(-3px);
      background: rgba(52, 152, 219, 0.1);
    }
    .ref-link:hover img {
      transform: scale(1.1);
    }
    .ref-link.youtube:hover {
      background: rgba(255, 0, 0, 0.1);
    }
    .ref-link.telegram:hover {
      background: rgba(0, 136, 204, 0.1);
    }
    .ref-link.facebook:hover {
      background: rgba(24, 119, 242, 0.1);
    }
    .ref-link.zalo:hover {
      background: rgba(0, 104, 255, 0.1);
    }
    @media (max-width: 768px) {
      .donate-card {
        max-width: 95%;
        padding: 20px;
      }
      .donate-card-title {
        font-size: 1.2rem;
        white-space: nowrap;
      }
      .donate-card-subtitle {
        display: none;
      }
      .bank {
        font-size: 12px;
        padding: 8px 10px;
      }
      .bank-info-container {
        gap: 10px;
        margin-bottom: 10px;
      }
      .bank-group {
        gap: 6px;
      }
      .donate-card-poster {
        width: 180px;
        height: 180px;
        margin: 12px auto;
        padding: 8px;
      }
      .donate-method-label {
        margin-top: 1rem;
        margin-bottom: 1.5rem;
      }
      .donate-button {
        height: 48px;
      }
      .ref-links-container {
        gap: 15px;
      }
      .ref-link {
        width: 40px;
        height: 40px;
      }
      .ref-link img {
        width: 40px;
        height: 40px;
      }
    }
  </style>
</head>
<body>
  <div class="donate-page">
    <div class="donate-card">
      <h1 class="donate-card-title">Mời Phúc Thiên Lang 1 Cốc Cafe</h1>
      
      <p class="donate-card-subtitle">
        Nếu bạn thấy công cụ này hữu ích, hãy mời mình 1 cốc cafe nhé! 
        <br>Mọi sự đóng góp đều được ghi nhận và trân trọng ❤️
      </p>

      <div class="bank-info-container">
        <div class="bank-group">
          <span class="bank bank-name tcb">Ngân hàng TMCP Kỹ Thương Việt Nam (TCB)</span>
          <span class="bank bank-account tcb">Tài khoản: 338.2345.6789</span>
        </div>
        <div class="bank-group">
          <span class="bank bank-name scb">Ngân hàng Thương mại Cổ phần Sài gòn (SCB)</span>
          <span class="bank bank-account scb">Tài khoản: 338.2345.6789</span>
        </div>
      </div>

    <img
      src="./img/QR_Momo.svg"
      alt="Phúc Thiên Lang"
      class="donate-card-poster mt-1">
    
    <span class="bank info">Chủ tài khoản: Phạm Văn Phúc</span>

    <div class="donate-method-label">
    </div>

    <div class="donate-card-buttons">
      <a
        class="donate-button momo"
        title="Momo Wallet"
        href="https://me.momo.vn/phucthienlang"
        target="_blank"
        rel="noopener"
      >
        <svg class="svg-icon fill-current imgLogo " fill="#fff" height="87" viewBox="0 0 96 87" width="96" xmlns="http://www.w3.org/2000/svg">
          <path d="M75.5326 0C64.2284 0 55.0651 8.74843 55.0651 19.5409C55.0651 30.3333 64.2284 39.0818 75.5326 39.0818C86.8368 39.0818 96 30.3333 96 19.5409C96 8.74843 86.8368 0 75.5326 0ZM75.5326 27.8805C70.7368 27.8805 66.8403 24.1604 66.8403 19.5818C66.8403 15.0031 70.7368 11.283 75.5326 11.283C80.3283 11.283 84.2248 15.0031 84.2248 19.5818C84.2248 24.1604 80.3283 27.8805 75.5326 27.8805ZM49.1561 14.6761V39.1226H37.3809V14.5535C37.3809 12.7138 35.8394 11.2421 33.9126 11.2421C31.9857 11.2421 30.4442 12.7138 30.4442 14.5535V39.1226H18.669V14.5535C18.669 12.7138 17.1276 11.2421 15.2007 11.2421C13.2739 11.2421 11.7324 12.7138 11.7324 14.5535V39.1226H0V14.6761C0 6.58176 6.89385 0 15.372 0C18.8403 0 22.0089 1.10377 24.5781 2.9434C27.1472 1.10377 30.3586 0 33.7841 0C42.2623 0 49.1561 6.58176 49.1561 14.6761ZM75.5326 47.544C64.2284 47.544 55.0651 56.2925 55.0651 67.0849C55.0651 77.8774 64.2284 86.6258 75.5326 86.6258C86.8368 86.6258 96 77.8774 96 67.0849C96 56.2925 86.8368 47.544 75.5326 47.544ZM75.5326 75.4245C70.7368 75.4245 66.8403 71.7044 66.8403 67.1258C66.8403 62.5472 70.7368 58.827 75.5326 58.827C80.3283 58.827 84.2248 62.5472 84.2248 67.1258C84.2248 71.7044 80.3283 75.4245 75.5326 75.4245ZM49.1561 62.2201V86.6667H37.3809V62.0975C37.3809 60.2579 35.8394 58.7862 33.9126 58.7862C31.9857 58.7862 30.4442 60.2579 30.4442 62.0975V86.6667H18.669V62.0975C18.669 60.2579 17.1276 58.7862 15.2007 58.7862C13.2739 58.7862 11.7324 60.2579 11.7324 62.0975V86.6667H0V62.2201C0 54.1258 6.89385 47.544 15.372 47.544C18.8403 47.544 22.0089 48.6478 24.5781 50.4874C27.1472 48.6478 30.3158 47.544 33.7841 47.544C42.2623 47.544 49.1561 54.1258 49.1561 62.2201Z" fill=""></path>
        </svg>
      </a>
      <a
        class="donate-button paypal mt-1"
        title="Paypal"
        href="https://paypal.me/phucthienlang"
        target="_blank"
        rel="noopener"
      >
        <img
          src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAxcHgiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAxMDEgMzIiIHByZXNlcnZlQXNwZWN0UmF0aW89InhNaW5ZTWluIG1lZXQiIHhtbG5zPSJodHRwOiYjeDJGOyYjeDJGO3d3dy53My5vcmcmI3gyRjsyMDAwJiN4MkY7c3ZnIj48cGF0aCBmaWxsPSIjMDAzMDg3IiBkPSJNIDEyLjIzNyAyLjggTCA0LjQzNyAyLjggQyAzLjkzNyAyLjggMy40MzcgMy4yIDMuMzM3IDMuNyBMIDAuMjM3IDIzLjcgQyAwLjEzNyAyNC4xIDAuNDM3IDI0LjQgMC44MzcgMjQuNCBMIDQuNTM3IDI0LjQgQyA1LjAzNyAyNC40IDUuNTM3IDI0IDUuNjM3IDIzLjUgTCA2LjQzNyAxOC4xIEMgNi41MzcgMTcuNiA2LjkzNyAxNy4yIDcuNTM3IDE3LjIgTCAxMC4wMzcgMTcuMiBDIDE1LjEzNyAxNy4yIDE4LjEzNyAxNC43IDE4LjkzNyA5LjggQyAxOS4yMzcgNy43IDE4LjkzNyA2IDE3LjkzNyA0LjggQyAxNi44MzcgMy41IDE0LjgzNyAyLjggMTIuMjM3IDIuOCBaIE0gMTMuMTM3IDEwLjEgQyAxMi43MzcgMTIuOSAxMC41MzcgMTIuOSA4LjUzNyAxMi45IEwgNy4zMzcgMTIuOSBMIDguMTM3IDcuNyBDIDguMTM3IDcuNCA4LjQzNyA3LjIgOC43MzcgNy4yIEwgOS4yMzcgNy4yIEMgMTAuNjM3IDcuMiAxMS45MzcgNy4yIDEyLjYzNyA4IEMgMTMuMTM3IDguNCAxMy4zMzcgOS4xIDEzLjEzNyAxMC4xIFoiPjwvcGF0aD48cGF0aCBmaWxsPSIjMDAzMDg3IiBkPSJNIDM1LjQzNyAxMCBMIDMxLjczNyAxMCBDIDMxLjQzNyAxMCAzMS4xMzcgMTAuMiAzMS4xMzcgMTAuNSBMIDMwLjkzNyAxMS41IEwgMzAuNjM3IDExLjEgQyAyOS44MzcgOS45IDI4LjAzNyA5LjUgMjYuMjM3IDkuNSBDIDIyLjEzNyA5LjUgMTguNjM3IDEyLjYgMTcuOTM3IDE3IEMgMTcuNTM3IDE5LjIgMTguMDM3IDIxLjMgMTkuMzM3IDIyLjcgQyAyMC40MzcgMjQgMjIuMTM3IDI0LjYgMjQuMDM3IDI0LjYgQyAyNy4zMzcgMjQuNiAyOS4yMzcgMjIuNSAyOS4yMzcgMjIuNSBMIDI5LjAzNyAyMy41IEMgMjguOTM3IDIzLjkgMjkuMjM3IDI0LjMgMjkuNjM3IDI0LjMgTCAzMy4wMzcgMjQuMyBDIDMzLjUzNyAyNC4zIDM0LjAzNyAyMy45IDM0LjEzNyAyMy40IEwgMzYuMTM3IDEwLjYgQyAzNi4yMzcgMTAuNCAzNS44MzcgMTAgMzUuNDM3IDEwIFogTSAzMC4zMzcgMTcuMiBDIDI5LjkzNyAxOS4zIDI4LjMzNyAyMC44IDI2LjEzNyAyMC44IEMgMjUuMDM3IDIwLjggMjQuMjM3IDIwLjUgMjMuNjM3IDE5LjggQyAyMy4wMzcgMTkuMSAyMi44MzcgMTguMiAyMy4wMzcgMTcuMiBDIDIzLjMzNyAxNS4xIDI1LjEzNyAxMy42IDI3LjIzNyAxMy42IEMgMjguMzM3IDEzLjYgMjkuMTM3IDE0IDI5LjczNyAxNC42IEMgMzAuMjM3IDE1LjMgMzAuNDM3IDE2LjIgMzAuMzM3IDE3LjIgWiI+PC9wYXRoPjxwYXRoIGZpbGw9IiMwMDMwODciIGQ9Ik0gNTUuMzM3IDEwIEwgNTEuNjM3IDEwIEMgNTEuMjM3IDEwIDUwLjkzNyAxMC4yIDUwLjczNyAxMC41IEwgNDUuNTM3IDE4LjEgTCA0My4zMzcgMTAuOCBDIDQzLjIzNyAxMC4zIDQyLjczNyAxMCA0Mi4zMzcgMTAgTCAzOC42MzcgMTAgQyAzOC4yMzcgMTAgMzcuODM3IDEwLjQgMzguMDM3IDEwLjkgTCA0Mi4xMzcgMjMgTCAzOC4yMzcgMjguNCBDIDM3LjkzNyAyOC44IDM4LjIzNyAyOS40IDM4LjczNyAyOS40IEwgNDIuNDM3IDI5LjQgQyA0Mi44MzcgMjkuNCA0My4xMzcgMjkuMiA0My4zMzcgMjguOSBMIDU1LjgzNyAxMC45IEMgNTYuMTM3IDEwLjYgNTUuODM3IDEwIDU1LjMzNyAxMCBaIj48L3BhdGg+PHBhdGggZmlsbD0iIzAwOWNkZSIgZD0iTSA2Ny43MzcgMi44IEwgNTkuOTM3IDIuOCBDIDU5LjQzNyAyLjggNTguOTM3IDMuMiA1OC44MzcgMy43IEwgNTUuNzM3IDIzLjYgQyA1NS42MzcgMjQgNTUuOTM3IDI0LjMgNTYuMzM3IDI0LjMgTCA2MC4zMzcgMjQuMyBDIDYwLjczNyAyNC4zIDYxLjAzNyAyNCA2MS4wMzcgMjMuNyBMIDYxLjkzNyAxOCBDIDYyLjAzNyAxNy41IDYyLjQzNyAxNy4xIDYzLjAzNyAxNy4xIEwgNjUuNTM3IDE3LjEgQyA3MC42MzcgMTcuMSA3My42MzcgMTQuNiA3NC40MzcgOS43IEMgNzQuNzM3IDcuNiA3NC40MzcgNS45IDczLjQzNyA0LjcgQyA3Mi4yMzcgMy41IDcwLjMzNyAyLjggNjcuNzM3IDIuOCBaIE0gNjguNjM3IDEwLjEgQyA2OC4yMzcgMTIuOSA2Ni4wMzcgMTIuOSA2NC4wMzcgMTIuOSBMIDYyLjgzNyAxMi45IEwgNjMuNjM3IDcuNyBDIDYzLjYzNyA3LjQgNjMuOTM3IDcuMiA2NC4yMzcgNy4yIEwgNjQuNzM3IDcuMiBDIDY2LjEzNyA3LjIgNjcuNDM3IDcuMiA2OC4xMzcgOCBDIDY4LjYzNyA4LjQgNjguNzM3IDkuMSA2OC42MzcgMTAuMSBaIj48L3BhdGg+PHBhdGggZmlsbD0iIzAwOWNkZSIgZD0iTSA5MC45MzcgMTAgTCA4Ny4yMzcgMTAgQyA4Ni45MzcgMTAgODYuNjM3IDEwLjIgODYuNjM3IDEwLjUgTCA4Ni40MzcgMTEuNSBMIDg2LjEzNyAxMS4xIEMgODUuMzM3IDkuOSA4My41MzcgOS41IDgxLjczNyA5LjUgQyA3Ny42MzcgOS41IDc0LjEzNyAxMi42IDczLjQzNyAxNyBDIDczLjAzNyAxOS4yIDczLjUzNyAyMS4zIDc0LjgzNyAyMi43IEMgNzUuOTM3IDI0IDc3LjYzNyAyNC42IDc5LjUzNyAyNC42IEMgODIuODM3IDI0LjYgODQuNzM3IDIyLjUgODQuNzM3IDIyLjUgTCA4NC41MzcgMjMuNSBDIDg0LjQzNyAyMy45IDg0LjczNyAyNC4zIDg1LjEzNyAyNC4zIEwgODguNTM3IDI0LjMgQyA4OS4wMzcgMjQuMyA4OS41MzcgMjMuOSA4OS42MzcgMjMuNCBMIDkxLjYzNyAxMC42IEMgOTEuNjM3IDEwLjQgOTEuMzM3IDEwIDkwLjkzNyAxMCBaIE0gODUuNzM3IDE3LjIgQyA4NS4zMzcgMTkuMyA4My43MzcgMjAuOCA4MS41MzcgMjAuOCBDIDgwLjQzNyAyMC44IDc5LjYzNyAyMC41IDc5LjAzNyAxOS44IEMgNzguNDM3IDE5LjEgNzguMjM3IDE4LjIgNzguNDM3IDE3LjIgQyA3OC43MzcgMTUuMSA4MC41MzcgMTMuNiA4Mi42MzcgMTMuNiBDIDgzLjczNyAxMy42IDg0LjUzNyAxNCA4NS4xMzcgMTQuNiBDIDg1LjczNyAxNS4zIDg1LjkzNyAxNi4yIDg1LjczNyAxNy4yIFoiPjwvcGF0aD48cGF0aCBmaWxsPSIjMDA5Y2RlIiBkPSJNIDk1LjMzNyAzLjMgTCA5Mi4xMzcgMjMuNiBDIDkyLjAzNyAyNCA5Mi4zMzcgMjQuMyA5Mi43MzcgMjQuMyBMIDk1LjkzNyAyNC4zIEMgOTYuNDM3IDI0LjMgOTYuOTM3IDIzLjkgOTcuMDM3IDIzLjQgTCAxMDAuMjM3IDMuNSBDIDEwMC4zMzcgMy4xIDEwMC4wMzcgMi44IDk5LjYzNyAyLjggTCA5Ni4wMzcgMi44IEMgOTUuNjM3IDIuOCA5NS40MzcgMyA5NS4zMzcgMy4zIFoiPjwvcGF0aD48L3N2Zz4"
          alt="Paypal"
        >
      </a>
    </div>

    <div class="ref-links-container">
      <a
        target="_blank"
        class="ref-link youtube"
        href="https://www.youtube.com/channel/UCagMQSmSTXV1AUSj91jXgSA?sub_confirmation=0"
        rel="noopener"
        title="Youtube"
      >
        <img src="./img/Youtube-iCon.svg" alt="Youtube">
      </a>
      <a
        target="_blank"
        class="ref-link telegram"
        href="https://t.me/phucthienlang"
        rel="noopener"
        title="Telegram"
      >
        <img src="./img/Telegram-iCon.svg" alt="Telegram">
      </a>
      <a
        target="_blank"
        class="ref-link facebook"
        rel="noopener"
        href="https://fb.com/phucthienlang"
        title="Facebook"
      >
        <img src="./img/Facebook-iCon.svg" alt="Facebook">
      </a>
      <a
        target="_blank"
        class="ref-link zalo"
        rel="noopener"
        href="https://zalo.me/0819908399"
        title="Zalo"
      >
        <img src="./img/Zalo-iCon.svg" alt="Zalo">
      </a>
    </div>
    </div>
  </div>
</div>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NCCKS3D0GQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-NCCKS3D0GQ');
</script>

<?php output_protection_js(); ?>
</body>
</html>

