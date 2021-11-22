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
                <th scope="col">ID</th>
                <th scope="col">Kérdés</th>
                <th scope="col">Típus</th>
                <th scope=col>Műveletek</th>
            </tr>
            @forelse ($questions as $row)
            <tr>
                <td>{{$row[0]}}</td>
                <td>{{$row[1]}}</td>
                <td>{{$row[2] == 'knowledge' ? 'Tudás' : 'Kérdés'}}</td>
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
    @isset($editID)
    <h2>Szerkesztés: </h2>
    <div class="d-flex justify-content-center mb-3">
        
        <input type="text" wire:model="editQuestion">
        <select wire:model="editTyp">
            <option value="knowledge">Tudás</option>
            <option value="question">Kérdés</option>    
        </select>
    
        <div >
            <button wire:click="updateRow" class="button btn-secondary mx-5">Módosítás mentése</button>
        </div>

    </div>

    @endisset
    <div>
        <h2>Új kérdés:</h2>
        <div class="d-flex justify-content-center">
        
            <input type="text" wire:model="newQuestion">
            <select wire:model="typ">
                <option value="knowledge">Tudás</option>
                <option value="question">Kérdés</option>    
            </select>
        
            <div >
                <button wire:click="addRow" class="button btn-secondary mx-5">Új sor</button>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <button wire:click="saveQuestionare" class="button btn-primary mt-5">Mentés</button>
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


@if($questionSubtyp == 'withAnswer')
    <h2>Új több válaszos kérdés:</h2>
    <div class="d-flex justify-content-center">

        <input type="text" wire:model="newQuestion">
        <select wire:model="typ">
            <option value="knowledge">Tudás</option>
            <option value="question">Kérdés</option>    
        </select>

    </div>    
    <h3>Válaszok</h3>
    <div>
        @for ($i = 0; $i < count($answers); $i++)
        <input type="text" wire:model={{  $answers[$i] }}>
        @endfor
        <div >
            <button wire:click="addAnswer" class="button btn-secondary mx-5">Új válasz</button>
        </div>
    </div>
@endif