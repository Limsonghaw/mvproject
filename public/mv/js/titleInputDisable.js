        // 获取Radio Button和Title输入框的引用
        const smsRadio = document.getElementById('SMS');
        const titleInput = document.getElementById('Title');
        // 添加事件监听器
        smsRadio.addEventListener('change', function() {
            // 检查SMS Radio Button是否被选中
            if (smsRadio.checked) {
                // 如果被选中，禁用Title输入框
                titleInput.disabled = true;
            } else {
                // 如果未被选中，启用Title输入框
                titleInput.disabled = false;
            }
        });
        const emailRadio = document.getElementById('Email');
        // 添加事件监听器
        emailRadio.addEventListener('change', function() {
            // 检查SMS Radio Button是否被选中
            if (emailRadio.checked) {
                // 如果被选中，禁用Title输入框
                titleInput.disabled = false;
            } else {
                // 如果未被选中，启用Title输入框
                titleInput.disabled = true;
            }
        });