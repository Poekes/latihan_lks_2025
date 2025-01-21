<x-layoutadmin>
    @dd(Request()->user()->role == 'admin' ? 'anda admin' : 'ada bukan admin');
    <h1>this page admin home</h1>
</x-layoutadmin>
