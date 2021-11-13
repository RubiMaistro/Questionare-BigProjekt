<div>
    <div>
        <input type="text" wire:model="questionareName">
    </div>
    <div>
        <h2>Kérdések:</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Kérdés</th>
                <th>Típus</th>
            </tr>
            @forelse ($questions as $row)
            <tr>
                <td>{{$row[0]}}</td>
                <td>{{$row[1]}}</td>
                <td>{{$row[2] == 'knowledge' ? 'Tudás' : 'Kérdés'}}</td>
            </tr>
            @empty
                <p>Még nem adtál hozzá kérdést!</p>
            @endforelse
            
        </table>
    </div>
    <div>
        <h2>Új kérdés:</h2>
        <input type="text" wire:model="newQuestion">
        <select wire:model="typ">
            <option value="knowledge">Tudás</option>
            <option value="question">Kérdés</option>    
        </select>
    </div>
    <div>
        <button wire:click="addRow">Új sor</button>
    </div>
    @isset($questions)
        <p>Sorok: {{count($questions)}}</p>
    @endisset

    <div>
        <button wire:click="saveQuestionare">Mentés</button>
    </div>
</div>
