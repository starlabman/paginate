<div>
    <h1 class="mb-5 text-center">Students</h1>
    <div class="row mt-4">
    	<div class="col-md-6">
    		<label for="query" class="sr-only">Search</label>
    		<input type="text" wire:model="query" id="query" name="" placeholder="Ex Eldrich Palmer">
    	</div>
    	<div class="col-auto ml-auto mb-2">
    		Show
    	<select wire:model.lazy="perPage" id="per_page" class="custom-select w-auto">
    		@for($i = 5 ; $i <= 25, $i += 5)
    			<option value="{{$i}}" > {{$i}} </option>
    		@endfor
    	</select>
    	<label for="per_page"> per page</label>
    	</div>
    </div>
            <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Adult ?</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->is_an_adult ? 'Adult' : 'Jeune' }}</td>
                    </tr>
                    endforeach
                </tbody>
            </table>
            
        </div>
        <div class="mt-3 col-md-6 mx-auto">
            {{$students->links()}}
        </div>
</div>
