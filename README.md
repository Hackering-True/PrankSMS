# PrankSMS Tool

Welcome to **PrankSMS**, a tool that allows you to send SMS messages programmatically using the Twilio API. This tool was designed as a learning project to demonstrate how to integrate APIs with PHP for practical use.

---

## Table of Contents
- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [Example](#example)
- [Disclaimer](#disclaimer)
- [Contributing](#contributing)
- [License](#license)

---

## Features
- **Simple and Easy-to-Use CLI**: User-friendly interface for sending SMS messages.
- **Customizable**: You can define the recipient, sender, and message content.
- **Powered by Twilio API**: Reliable and efficient SMS delivery.

---

## Requirements
- A [Twilio account](https://www.twilio.com/) (including your **Account SID** and **Auth Token**).  
- PHP installed on your system (version 7.0+).  
- Internet connection.  

---

## Installation
1. Clone this repository to your local machine:
   ```bash
   git clone https://github.com/Hackering-True/PrankSMS.git
   cd PrankSMS
   ```
2. Ensure PHP is installed by running:
   ```bash
   php --version
   ```
3. Install any required dependencies (if applicable).

---

## Usage
1. Log in to your [Twilio account](https://www.twilio.com/login).  
2. Retrieve your **Account SID** and **Auth Token** from the Twilio Console.  
3. Run the tool in your terminal:
   ```bash
   php PrankSMS.php
   ```
4. Follow the on-screen instructions to:
   - Enter your Twilio account details.
   - Specify the recipient's and sender's phone numbers.
   - Write the message content.

---

## Example
Here’s a sample of how it works:
```plaintext
Welcome to the PrankSMS Tool

Enter your Twilio account SID: ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
Enter your Twilio auth token: your_auth_token
Enter the recipient's phone number: +1234567890
Enter the sender's phone number: +0987654321
Enter the message content: "Hello, this is a test message!"
```

Upon successful execution, the tool will send the SMS and display a confirmation message.

---

## Disclaimer
This tool is intended **solely for educational purposes**. Please use it responsibly and ensure compliance with Twilio's terms of service and any applicable laws. Unauthorized use of this tool for malicious purposes is strictly prohibited.

---

## Contributing
We welcome contributions to improve this tool! If you'd like to contribute:
1. Fork this repository.
2. Create a new branch for your feature or bug fix:
   ```bash
   git checkout -b feature-name
   ```
3. Make your changes and test thoroughly.
4. Submit a pull request with a clear description of your changes.

---

## License
This project is licensed under the [MIT License](LICENSE). Feel free to use and modify the tool as needed.
