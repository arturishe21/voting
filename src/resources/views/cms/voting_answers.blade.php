<div class="answers_section">

    <div class="row">
        <div class="col col-10">
            <strong>Ответ</strong>
        </div>
        <div class="col col-2">
            <strong>Кол. голосов</strong>
        </div>
    </div>

    @foreach($answers as $answer)
        <section id="answer_{{$answer->id}}">
            <div class="row">
                <div class="col col-10">
                    <label class="input">
                        <input type="text" value="{{$answer->title}}" placeholder="Введите вариант ответа" name="answers[{{$answer->id}}]">
                    </label>
                </div>
                <div class="col col-1">
                    <label class="input">
                        <input type="text" value="{{$answer->count_votes}}" placeholder="Кол. ответов" name="count_voting[{{$answer->id}}]" readonly>
                    </label>
                </div>
                <div class="col col-1">
                    <a class="red delete_answer" data-id = '{{$answer->id}}'>X</a>
                </div>
            </div>
        </section>
    @endforeach

</div>
<a class="add_answer">Добавить ответ</a>
<script>
    $('.add_answer').click(function () {
        $('.answers_section').append('<section><div class="row"><div class="col col-10"><label class="input"><input type="text" placeholder="Введите вариант ответа" name="answers[new][]"></label></div><div class="col col-2"><label class="input"><input type="text" placeholder="Кол. ответов" name="count_voting[new][]" readonly></label></div></div></section>');
    });

    $('.delete_answer').click(function () {

        if (confirm('Точно удалить?')) {

            var id = $(this).attr('data-id');

            $.post("/admin/delete-answer/" + id,
                    function(data){
                        $('#answer_' + id).remove();
             });
        }

    })
</script>