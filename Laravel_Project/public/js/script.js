$('#deleteCategory').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var action = button.data('action');
    var modal = $(this);
    modal.find('form').attr('action', action);
});
