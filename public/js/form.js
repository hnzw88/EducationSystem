document.addEventListener('DOMContentLoaded', function() {
    // フォームを追加するボタン
    const addButton = document.getElementById('add-form');
    
    // フォームのコンテナ (フォームが追加される場所)
    const formContainer = document.querySelector('.delivery-row').parentNode;
    
    // +ボタンをクリックしたときに行を追加する
    addButton.addEventListener('click', function() {
        // 新しい行のHTML
        const newRow = `
            <div class="delivery-row">
                <input type="date" name="from_date" value="">
                <input type="time" name="rom_time" value="">
                <span>~</span>
                <input type="date" name="to_date" value="">
                <input type="time" name="to_time" value="">
                <button type="button" class="remove-form">-</button>
            </div>
        `;
        // コンテナに追加
        formContainer.insertAdjacentHTML('beforeend', newRow);

        // 削除ボタンにイベントを再度追加
        attachRemoveListeners();
    });

    // 削除ボタンのイベントリスナーをすべてに追加
    function attachRemoveListeners() {
        const removeButtons = document.querySelectorAll('.remove-form');
        removeButtons.forEach(button => {
            button.removeEventListener('click', removeFormRow); // 重複防止のため一旦削除
            button.addEventListener('click', removeFormRow);
        });
    }

    // 行を削除する関数
    function removeFormRow(event) {
        const row = event.target.closest('.delivery-row');
        if (row) {
            row.remove();
        }
    }

    // 初期状態で既存の削除ボタンにもイベントリスナーを追加
    attachRemoveListeners();
});
