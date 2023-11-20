<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConfidexKey</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body oncontextmenu="return false;">
    <main>
        <div class="searching">
            <div class="loader"></div>
        </div>
        <div id="icons">
            <i id="theme-icon" class="fa fa-paint-roller"></i>
            <i id="info-icon" class="fa fa-info"></i>
            <i id="search-icon" class="fa fa-search"></i>
            <i id="add-icon" class="fa fa-plus"></i>
        </div>
        <div class="on logo-text" id="logo">Confidex<span>Key</span></div>
        <div class="box" id="add-form">
            <i class="fa fa-times close-icon"></i>
            <h2>Add Data</h2>
            <form id="send-data" method="post">
                <textarea name="msg" class="msgArea" placeholder="Message"></textarea>
                <p class="error-message"></p>
                <input autocomplete="off" type="file" name="file" id="file">
                <input autocomplete="off" class="pin" name="pin" type="text" placeholder="Pin">
                <p class="error-message"></p>
                <div class="check">
                    <label for="expiry">Auto Expiry</label> <input id="expiry" name="auto_expiry" value="1"
                        type="checkbox">
                </div>
                <select name="expiry_date" id="expiry_date" class="expiry-date">
                    <option value="+1 days">After 1 day</option>
                    <option value="+2 days">After 2 days</option>
                    <option value="+3 days">After 3 days</option>
                    <option value="+4 days">After 4 days</option>
                    <option value="+5 days">After 5 days</option>
                    <option value="+6 days">After 6 days</option>
                    <option value="+7 days">After 7 days</option>
                    <option value="+8 days">After 8 days</option>
                    <option value="+9 days">After 9 days</option>
                    <option value="+10 days">After 10 days</option>
                    <option value="+11 days">After 11 days</option>
                    <option value="+12 days">After 12 days</option>
                    <option value="+13 days">After 13 days</option>
                    <option value="+14 days">After 14 days</option>
                    <option value="+15 days">After 15 days</option>
                </select>
                <button>Add</button>
            </form>
        </div>
        <div class="box" id="result">
            <i class="fa fa-times close-icon"></i>
            <div class="result-msg"></div>
            <a target="_blank" href="" class="download-file">Download <i class="fa fa-download"></i></a>
            <div class="share-block">
                <span class="share-copied">Copied!</span>
                <div class="copy-result">Copy <i class="fa fa-clipboard"></i></div>
            </div>
            <textarea id="hiddenTextArea2"></textarea>
        </div>
        <div class="box" id="search-block">
            <i class="fa fa-times close-icon"></i>
            <h2>Search Data</h2>
            <form method="post" id="search-form">
                <input autocomplete="off" class="key" name="key" type="text" placeholder="Key">
                <p class="error-message"></p>
                <input autocomplete="off" class="pin" name="pin" type="text" placeholder="Pin">
                <p class="error-message second-error"></p>
                <button>Search</button>
            </form>
        </div>
        <div class="box" id="success">
            <i class="fa fa-times close-icon"></i>
            <h2>Data Inserted Successfully</h2>
            <div class="successInput">
                <label for="key">Key</label>
                <input id="keyResult" readonly type="text" value="Hello World">
                <span class="copied">Copied!</span>
                <i class="fa fa-clipboard copy-icon" data-target="keyResult"></i>
            </div>
            <div class="successInput">
                <label for="pin">Pin</label>
                <input id="pinResult" readonly type="text" value="Hello World">
                <span class="copied">Copied!</span>
                <i class="fa fa-clipboard copy-icon" data-target="pinResult"></i>
            </div>
            <div class="share-block">
                <span class="share-copied">Copied!</span>
                <div class="share-data">Share <i class="fa fa-share"></i></div>
            </div>
            <textarea id="hiddenTextArea"></textarea>
        </div>
        <div class="box" id="theme">
            <i class="fa fa-times close-icon"></i>
            <h2>Choose Theme</h2>
            <div class="theme-colors">
                <div class="theme-color active" style="--i: #0593a9"></div>
                <div class="theme-color" style="--i: #34a905"></div>
                <div class="theme-color" style="--i: #c12b05"></div>
                <div class="theme-color" style="--i: #6608e8"></div>
                <div class="theme-color" style="--i: #e8088b"></div>
                <div class="theme-color" style="--i: #e8d908"></div>
                <div class="theme-color" style="--i: #1a5276"></div>
                <div class="theme-color" style="--i: #27ae60"></div>
                <div class="theme-color" style="--i: #8e44ad"></div>
                <div class="theme-color" style="--i: #d35400"></div>
                <div class="theme-color" style="--i: #f39c12"></div>
                <div class="theme-color" style="--i: #7f8c8d"></div>
                <div class="theme-color" style="--i: #16a085"></div>
                <div class="theme-color" style="--i: #00f2ff"></div>
                <div class="theme-color" style="--i: #9b59b6"></div>
                <div class="theme-color" style="--i: #f003f2"></div>
                <div class="theme-color" style="--i: #e74c3c"></div>
                <div class="theme-color" style="--i: #3498db"></div>


            </div>
        </div>
        <div class="box" id="info">
            <i class="fa fa-times close-icon"></i>
            <h2>Welcome to ConfidexKey</h2>

            <div class="info-content">
                <h3>Features</h3>
                <ul>
                    <li><strong>Secure Data Storage:</strong> Safely store confidential information using a robust encryption mechanism.</li>
                    <li><strong>Key and Pin Access:</strong> Access data securely with a unique key and pin combination.</li>
                    <li><strong>User-Friendly Interface:</strong> Intuitive and easy-to-use interface for managing and accessing stored data.</li>
                    <li><strong>Customizable Security Settings:</strong> Tailor security settings to meet specific user requirements.</li>
                </ul>
                <h3>Usage</h3>
                <p>ConfidexKey simplifies the storage and retrieval of confidential data:</p>
                <ul>
                    <li><strong>Add Data:</strong> Add your confidential information securely with specified access keys.</li>
                    <li><strong>Access Data:</strong> Retrieve stored information using the assigned key and pin combination.</li>
                    <li><strong>Manage Security:</strong> Customize and manage security settings for your stored data.</li>
                </ul>
                <h3>Security Information</h3>
                <p>ConfidexKey takes security seriously. Here's how we ensure your data is protected:</p>
                <ul>
                    <li><strong>Access Control:</strong> Strict control mechanisms for data access through unique keys and pins.</li>
                    <li><strong>Regular Updates:</strong> Regular updates and security patches to maintain robustness.</li>
                </ul>
                <h3>Support</h3>
                <p>For any inquiries, feedback, or support requests, contact us at <a href="mailto:vinaywebguy@gmail.com.">vinaywebguy@gmail.com.</a></p>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>