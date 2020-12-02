<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    <title>Word Matching Game</title>
</head>

<body>
    <section class="background">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="card mt-5">
                        <h4>Word Matcher</h4>
                        <p>Pick the best word(s) from the select box on the right that matches the word on the left.</p>
                        <form method="post" action="{{ route('submit') }}">
                            @csrf
                            <table>
                                @foreach ($words as $key => $word)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td> {{ $word->value }}</td>
                                        <td>
                                            <select class="word-select" required name="match[]">
                                                <option value="">Select a word</option>
                                                @foreach ($matches as $match)
                                                    <option value="{{ $match->id }}">{{ $match->value }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                            <button type="submit" class="btn btn-info btn-block mt-5">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).ready(function() {
            let selected = []
            $('.word-select').change(function(e) {
                // VALIDATES CODE TO MAKE SURE THE SAME WORD IS NOT SELECTED TWICE
                let value = $(this).val();
                if (selected.indexOf(value) !== -1) {
                    alert(
                        "That word has been selected already. Each word can be matched only once. Either change the match where it is being used or use a different word."
                        )
                    $(this).val("")
                } else {
                    selected = []
                    $('.word-select').each(function(e) {
                        let value = $(this).val();
                        if (value) selected.push(value)
                    })
                }
                console.log(selected)
            })
        });

    </script>
    @if (session()->has('score_status'))
        @php
        $icon = session()->get('score_status');
        $title = session()->get('score_status_title');
        $message = session()->get('score_status_message');
        @endphp
        <script>
            Swal.fire({
                title: "{{ $title }}",
                icon: "{{ $icon }}",
                text: "{{ $message }}",
                confirmButtonText: "Sweet!"
            })

        </script>
    @endif
</body>

</html>
