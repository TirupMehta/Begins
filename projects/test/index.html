<?php
// Handle file upload and cleanup
$tempDir = __DIR__ . '/temp/';
$uploadMessage = '';
$shareLink = '';

if (!file_exists($tempDir)) {
    mkdir($tempDir, 0777, true);
}

// Clean up expired files
foreach (glob($tempDir . '*') as $file) {
    if (time() - filemtime($file) > 600) { // 10 minutes max
        unlink($file);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_FILES['files'])) {
    $shareId = uniqid();
    $tempFolder = $tempDir . $shareId;
    mkdir($tempFolder);
    
    foreach ($_FILES['files']['tmp_name'] as $key => $tmpName) {
        if ($_FILES['files']['error'][$key] === UPLOAD_ERR_OK) {
            $fileName = basename($_FILES['files']['name'][$key]);
            move_uploaded_file($tmpName, "$tempFolder/$fileName");
        }
    }
    
    $shareLink = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]temp/$shareId/";
    $uploadMessage = 'Files uploaded successfully!';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TempShare - Time-Limited File Sharing</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(45deg, #1a1a2e, #16213e, #0f3460);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 25px;
            padding: 40px;
            width: 100%;
            max-width: 900px;
            backdrop-filter: blur(15px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
        }

        .container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        h1 {
            color: #e94560;
            text-align: center;
            margin-bottom: 35px;
            font-size: 2.8em;
            text-shadow: 0 4px 10px rgba(233, 69, 96, 0.3);
            position: relative;
            z-index: 1;
        }

        .drop-zone {
            border: 3px dashed rgba(255, 255, 255, 0.3);
            border-radius: 15px;
            padding: 50px;
            text-align: center;
            cursor: pointer;
            transition: all 0.4s ease;
            margin-bottom: 25px;
            background: rgba(255, 255, 255, 0.03);
            position: relative;
            z-index: 1;
        }

        .drop-zone:hover {
            border-color: #e94560;
            background: rgba(233, 69, 96, 0.1);
            transform: scale(1.02);
        }

        .drop-zone.dragover {
            border-color: #e94560;
            background: rgba(233, 69, 96, 0.2);
            transform: scale(1.05);
        }

        .drop-zone p {
            color: #fff;
            font-size: 1.3em;
            margin-bottom: 15px;
        }

        .time-options {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-bottom: 25px;
            position: relative;
            z-index: 1;
        }

        .time-btn {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            color: #fff;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .time-btn:hover, .time-btn.active {
            background: #e94560;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(233, 69, 96, 0.4);
        }

        .file-list {
            max-height: 250px;
            overflow-y: auto;
            margin-bottom: 25px;
            position: relative;
            z-index: 1;
        }

        .file-item {
            background: rgba(255, 255, 255, 0.08);
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #fff;
            transition: all 0.3s ease;
        }

        .file-item:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateX(5px);
        }

        .share-section {
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .share-btn {
            background: linear-gradient(45deg, #e94560, #ff6b6b);
            border: none;
            padding: 15px 40px;
            border-radius: 25px;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1.1em;
            font-weight: 600;
            width: 100%;
        }

        .share-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(233, 69, 96, 0.4);
        }

        .share-link {
            margin-top: 25px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 10px;
            color: #fff;
            word-break: break-all;
            position: relative;
            z-index: 1;
        }

        .timer {
            color: #e94560;
            font-size: 0.9em;
            margin-top: 10px;
        }

        .copy-btn {
            background: linear-gradient(45deg, #4CAF50, #66BB6A);
            border: none;
            padding: 10px 25px;
            border-radius: 20px;
            color: white;
            cursor: pointer;
            margin-top: 15px;
            transition: all 0.3s ease;
        }

        .copy-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(76, 175, 80, 0.4);
        }

        .message {
            color: #fff;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>TempShare</h1>
        
        <form id="uploadForm" enctype="multipart/form-data" method="post">
            <div class="drop-zone" id="dropZone">
                <p>Drop folders/files here</p>
                <p>or click to browse</p>
                <input type="file" name="files[]" id="fileInput" multiple webkitdirectory directory style="display: none;">
            </div>

            <div class="time-options">
                <button type="button" class="time-btn" data-time="1">1 Minute</button>
                <button type="button" class="time-btn" data-time="5">5 Minutes</button>
                <button type="button" class="time-btn active" data-time="10">10 Minutes</button>
            </div>

            <div class="file-list" id="fileList"></div>

            <div class="share-section">
                <?php if ($uploadMessage): ?>
                    <p class="message"><?php echo $uploadMessage; ?></p>
                <?php endif; ?>
                <button type="submit" class="share-btn" id="shareButton" style="display: none;">Generate Temporary Link</button>
                
                <?php if ($shareLink): ?>
                    <div class="share-link" id="shareLink" style="display: block;">
                        <p id="linkText"><?php echo $shareLink; ?></p>
                        <div class="timer" id="timer">Expires in: 10:00</div>
                        <button type="button" class="copy-btn" id="copyButton">Copy Link</button>
                    </div>
                <?php endif; ?>
            </div>
        </form>
    </div>

    <script>
        const dropZone = document.getElementById('dropZone');
        const fileInput = document.getElementById('fileInput');
        const fileList = document.getElementById('fileList');
        const shareButton = document.getElementById('shareButton');
        const timeButtons = document.querySelectorAll('.time-btn');
        const form = document.getElementById('uploadForm');
        let selectedFiles = [];
        let expirationTime = 10; // Default 10 minutes

        // Drag and drop events
        ['dragover', 'dragenter'].forEach(event => {
            dropZone.addEventListener(event, (e) => {
                e.preventDefault();
                dropZone.classList.add('dragover');
            });
        });

        ['dragleave', 'dragend'].forEach(event => {
            dropZone.addEventListener(event, () => {
                dropZone.classList.remove('dragover');
            });
        });

        dropZone.addEventListener('drop', (e) => {
            e.preventDefault();
            dropZone.classList.remove('dragover');
            fileInput.files = e.dataTransfer.files;
            handleFiles(e.dataTransfer.files);
        });

        fileInput.addEventListener('change', (e) => {
            handleFiles(e.target.files);
        });

        dropZone.addEventListener('click', () => {
            fileInput.click();
        });

        timeButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                timeButtons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                expirationTime = parseInt(btn.dataset.time);
            });
        });

        function handleFiles(files) {
            selectedFiles = Array.from(files);
            displayFiles();
            shareButton.style.display = selectedFiles.length > 0 ? 'block' : 'none';
        }

        function displayFiles() {
            fileList.innerHTML = '';
            selectedFiles.forEach((file) => {
                const fileItem = document.createElement('div');
                fileItem.className = 'file-item';
                fileItem.innerHTML = `
                    <span>${file.webkitRelativePath || file.name}</span>
                    <span>${formatFileSize(file.size)}</span>
                `;
                fileList.appendChild(fileItem);
            });
        }

        function formatFileSize(bytes) {
            if (bytes === 0) return '0 B';
            const k = 1024;
            const sizes = ['B', 'KB', 'MB', 'GB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
        }

        <?php if ($shareLink): ?>
            const timerElement = document.getElementById('timer');
            const copyButton = document.getElementById('copyButton');
            let secondsLeft = expirationTime * 60;

            const timerInterval = setInterval(() => {
                secondsLeft--;
                const mins = Math.floor(secondsLeft / 60);
                const secs = secondsLeft % 60;
                timerElement.textContent = `Expires in: ${mins}:${secs.toString().padStart(2, '0')}`;
                
                if (secondsLeft <= 0) {
                    clearInterval(timerInterval);
                    document.getElementById('shareLink').style.display = 'none';
                    timerElement.textContent = 'Link expired';
                }
            }, 1000);

            copyButton.addEventListener('click', () => {
                navigator.clipboard.writeText(document.getElementById('linkText').textContent)
                    .then(() => {
                        copyButton.textContent = 'Copied!';
                        setTimeout(() => copyButton.textContent = 'Copy Link', 2000);
                    })
                    .catch(err => console.error('Failed to copy:', err));
            });
        <?php endif; ?>
    </script>
</body>
</html>
