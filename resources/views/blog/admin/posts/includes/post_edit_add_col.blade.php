<div class="d-inline-flex p-2 bd-highlight">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary">Зберегти</button>
            </div>
        </div>
    </div>
</div>
<br>
@if ($item->exists)
    <div class="d-inline-flex p-2 bd-highlight">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    ID: {{ $item->id }}
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="d-inline-flex p-2 bd-highlight">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Створено</label>
                        <input type="text" value="{{ $item->created_at }}" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label for="title">Змінено</label>
                        <input type="text" value="{{ $item->updated_at }}" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label for="title">Опубліковано</label>
                        <input type="text" value="{{ $item->published_at }}" class="form-control" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
