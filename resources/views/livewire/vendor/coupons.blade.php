<div class="table-responsive">
    <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Coupon Name</th>
            <th scope="col">Coupon Code</th>
            <th scope="col">Type</th>
            <th scope="col">Value</th>
            <th scope="col">Expire At</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($coupons as $item)

            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->coupon_code }}</td>
                <td>{{ $item->type }}</td>
                <td>{{ $item->value }}</td>
                <td>{{ $item->expire_at }}</td>
            </tr>
            @empty

            @endforelse
        </tbody>
      </table>
</div>
