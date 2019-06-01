$(function(){
	$('#exampleModal').on('show.bs.modal', function (event) {
    // ボタンを取得
    var button = $(event.relatedTarget);
    // data-***の部分を取得
    var sampledata = button.data('sample');
    var modal = $(this);
    // モーダルに取得したパラメータを表示
    // 以下ではh5のモーダルタイトルのクラス名を取得している
    modal.find('.modal-body').text(sampledata + 'を削除しますか？');
    modal.find('.modal-footer input').val(sampledata);
  })

});