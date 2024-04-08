<div class="container pt-5 bg-gray">
    <table id="example" class="table table-striped table-hover" style="width:100%">
        <thead>
            <tr>
                <th class="text-white">Name</th>
                <th class="text-white">Code</th>
                <th class="text-white">Country</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clubs as $club)
                <tr>
                    <td class="text-white">{{ $club['name'] }}</td>
                    <td class="text-white">{{ $club['code'] }}</td>
                    <td class="text-white">{{ $club['country'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>