@if (!$success)
<div class="mt-4" style="min-width: 50%; max-width: 75%">
    <div class="card-header">
        <h2>{{ $questionnaire->name }}</h2>
    </div>
    <div style="opacity: 0">{{ $id = 1 }}</div>
    @foreach($questions as $question)
    <div class="card-body" style="background-color: skyblue; margin: 1rem 0.5rem 1rem 0.5rem;">
        <h5 class="card-title">
            {{ $id.'. ' }}{{ $question->question }}
        </h5>
        <div class="row justify-content-center">
            <div class="card" style="width: 55%;">
                @if ( $question->question_subtyp == "Válaszokkal")
                    @foreach ( $answersFromDB as $answer )
                        @if ( $answer->questions_id == $question->id )
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answers{{$question->id}}" wire:click="clickedAnswer({{ $question->id }}, '{{ $answer->answer }}')"
                             value="{{ $answer->answer }}" id="{{ $answer->answer }}Radio">
                            <label class="form-check-label" for="{{ $answer->answer }}Radio">
                                {{ $answer->answer }}
                            </label>
                          </div>
                        @endif
                    @endforeach
                @endif
                @if ( $question->question_subtyp == "Igaz-hamis")
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="true-false{{$question->id}}" wire:click="clickedAnswer({{ $question->id }}, 'Igaz')" value="true" id="trueRadio">
                    <label class="form-check-label" for="trueRadio">
                      Igaz
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="true-false{{$question->id}}" wire:click="clickedAnswer({{ $question->id }}, 'Hamis')" value="false" id="falseRadio">
                    <label class="form-check-label" for="falseRadio">
                      Hamis
                    </label>
                  </div>
                @endif
                @if ( $question->question_subtyp == "Szabadszavas")
                    
                    <input type="text" wire:model ="answeredQuestion.{{$question->id}}">
                @endif
            </div>
        </div>
    </div>
    <div style="opacity: 0">{{ $id += 1 }}</div>
    @endforeach
    <div class="row justify-content-center">
        <button style="height: 50px; width: 50%" id="{{ $question->id }}" wire:click="saveAnswers">Befejez</button>
    </div>
    </div>
@endif

@if($success)
<div>
    <h2>Sikeres kitöltés!</h2>
    <button class="button btn-primary" wire:click="toHome">Kezdőlap</button>
</div>
@endif
