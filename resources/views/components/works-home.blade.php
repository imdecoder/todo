<table class="table mb-0">
    <thead>
        <tr>
            <th scope="col">Kullanıcı</th>
            <th scope="col">Görev</th>
            <th scope="col">Öncelik</th>
            <th scope="col">İşlemler</th>
        </tr>
    </thead>
    <tbody>

        @foreach($works as $work)
            <tr class="fw-normal" data-id="{{ $work->id }}">
                <th>
                    <img src="{{ $work->user->image }}" class="shadow-1-strong rounded-circle" alt="{{ $work->user->firstname }}"
                    style="width: 55px; height: auto">
                    <span class="ms-2">{{ $work->user->firstname }} {{ $work->user->lastname }}</span>
                </th>
                <td class="align-middle">
                    <span>{{ $work->title }}</span>
                </td>
                <td class="align-middle">
                    <h6 class="mb-0">
                        <span class="badge bg-{{ $work->priority->type }}">{{ $work->priority->name }}</span>
                    </h6>
                </td>
                <td class="align-middle">
                    <span class="edit" data-id="{{ $work->id }}" style="cursor: pointer">
                        <i class="fas fa-check text-success me-3"></i>
                    </span>
                    <span class="delete" data-id="{{ $work->id }}" style="cursor: pointer">
                        <i class="fas fa-trash-alt text-danger"></i>
                    </span>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
