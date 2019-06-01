$(function(){
	$('#exampleModal').on('show.bs.modal', function (event) {
    // ボタンを取得
    var button = $(event.relatedTarget);
    // data-***の部分を取得
    var iddata = button.data('id');
    var nicknamedata = button.data('nickname');
    var modal = $(this);
    // モーダルに取得したパラメータを表示
    // 以下ではh5のモーダルタイトルのクラス名を取得している
    modal.find('.modal-body').text(nicknamedata + 'を削除しますか？');
    modal.find('.sendid').val(iddata);
    modal.find('.sendnickname').val(nicknamedata);

  })

});