@if (!$success)
    
<div>
    <div class="d-flex justify-content-center mb-5">
        <h2 class="mx-1 ">Kérdőív neve: </h2>
        <input type="text" wire:model="questionareName">
    </div>
    <div>
        <h2>Kérdések:</h2>
        <table class="table table-striped mb-5 mt-2 border-bottom border-secondary ">
            <tr>
                <th scope="col">Kérdés</th>
                <th scope="col">Kérdéstípus</th>
                <th scope="col">Altípus</th>
            </tr>
            @forelse ($questions as $row)
            <tr>
                <td>{{$row[1]}}</td>
                <td>{{$row[2] == 'knowledge' ? 'Tudás' : 'Kérdés'}}</td>
                <td>{{ $row[3] }}</td>
                @isset( $row[4] )
                    @foreach ($row[4] as $rowAnswer )
                        <td>{{ $rowAnswer }}</td>
                    @endforeach
                @endisset
                <td>
                    <button type="button" class="btn btn-default" aria-label="Modosítás" wire:click="updateClick({{$row[0]}})">
                        <i class=" bi-pencil-square"></i>
                    </button>
                </td>
            </tr>
            @empty
                <p class="text-warning fst-italic font-monospace">Még nem adtál hozzá kérdést!</p>
            @endforelse
            
        </table>
    </div>
    <div class="d-flex justify-content-around">
        <button class="button btn-secondary {{ $questionSubtyp == 'Válaszokkal' ? 'disable' : ''  }}" wire:click="withAnswerbtn">Megadott válaszok</button>
        <button class="button btn-secondary {{ $questionSubtyp == 'Szabadszavas' ? 'disable' : ''  }}" wire:click="freeAnswerBtn">Szabad szavas</button>
        <button class="button btn-secondary {{ $questionSubtyp == 'Igaz-hamis' ? 'disable' : ''  }}" wire:click="trueFalseBtn">Igaz-Hamis</button>
    </div>
    @if($questionSubtyp == 'Válaszokkal')
        <h2>Új több válaszos kérdés:</h2>
        <div class="">
            <table class="table table-striped mb-5 mt-2 border-bottom border-secondary ">
                @forelse ($answers as $answer)
                <tr>
                    <td>{{$answer}}</td>
                    <td>
                        <button type="button" class="btn btn-default" aria-label="Modosítás" wire:click="updateAnswer({{$answer}})">
                            <i class=" bi-pencil-square"></i>
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-default" aria-label="Törlés" wire:click="deleteAnswer({{$answer}})">
                            <i class="bi-trash"></i>
                        </button>
                    </td>
                </tr>
                @empty
                    <p class="text-warning fst-italic font-monospace">Még nem adtál hozzá választ!</p>
                @endforelse
                
            </table>

            <input type="text" wire:model="newQuestion">
            <select wire:model="typ">
                <option value="unset">Kérjük válassz típust!</option>
                <option value="knowledge">Tudás</option>
                <option value="question">Kérdés</option>    
            </select>

        </div>    
        <h3>Válaszok</h3>
        <div class="d-flex justify-content-around">
            <input type="text" wire:model="answer">
            <div >
                <button wire:click="addAnswer" class="button btn-secondary mx-5">Válaszlehetőség hozzádása</button>
            </div>
        </div>
        <div >
            <button wire:click="addAnswerRow" class="button btn-secondary mx-5">Új sor</button>
        </div>
    @endif

    @if ($questionSubtyp == 'Szabadszavas')
        <div>
            <h2>Új Szabadválaszos kérdés:</h2>
            <div class="d-flex justify-content-center">
            
                <input type="text" wire:model="newQuestion">
                <select wire:model="typ">
                    <option value="unset">Kérjük válassz típust!</option>
                    <option value="knowledge">Tudás</option>
                    <option value="question">Kérdés</option>    
                </select>
            
                <div >
                    <button wire:click="addRow" class="button btn-secondary mx-5">Új sor</button>
                </div>
            </div>
        </div>
    @endif

    @if ($questionSubtyp == 'Igaz-hamis')
        <div>
            <h2>Új Igaz-hamis kérdés:</h2>
            <div class="d-flex justify-content-center">
            
                <input type="text" wire:model="newQuestion">
                <select wire:model="typ">
                    <option value="unset">Kérjük válassz típust!</option>
                    <option value="knowledge">Tudás</option>
                    <option value="question">Kérdés</option>    
                </select>
            
                <div >
                    <button wire:click="addRow" class="button btn-secondary mx-5">Új sor</button>
                </div>
            </div>
            
        </div>
    @endif
    <div class="d-flex justify-content-center">
        <button wire:click="saveQuestionare" class="button btn-primary mt-5 " {{ $questionareName && $questions ? '' : 'disabled'}}>Mentés</button>
    </div>
</div>
@endif

@if($success)
<div>
    <h2>Sikeres feltöltés!</h2>
    <button class="button btn-secondary" wire:click="setNew">Új kérdőív</button>
    <button class="button btn-primary" wire:click="toHome">Kezdőlap</button>
</div>
@endif


