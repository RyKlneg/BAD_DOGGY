<!-- resources/views/admin/orders.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenes de Bad Doggy</title>
    @vite('resources/css/app.css')
    <style>
        .status-pending { background-color: #fef3c7; color: #d97706; }
        .status-confirmed { background-color: #dbeafe; color: #1d4ed8; }
        .status-preparing { background-color: #fef3c7; color: #d97706; }
        .status-ready { background-color: #dcfce7; color: #16a34a; }
        .status-completed { background-color: #dcfce7; color: #16a34a; }
        .status-cancelled { background-color: #fee2e2; color: #dc2626; }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <img src="{{ asset('images/Logo_BAD_DOGGY.jpg') }}" alt="Logo" class="h-12 w-12 rounded-full">
                    <h1 class="ml-3 text-2xl font-bold text-gray-900">Pedidos de Bad Doggy</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-sm text-gray-600">{{ now()->format('d/m/Y H:i') }}</span>
                    <a href="{{ route('welcome') }}" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg text-sm font-semibold transition">
                        Volver al Sitio
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Estadísticas -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center">
                    <div class="p-3 bg-blue-100 rounded-lg">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Total Pedidos</p>
                        <p class="text-2xl font-semibold text-gray-900">{{ $totalOrders }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center">
                    <div class="p-3 bg-yellow-100 rounded-lg">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Pendientes</p>
                        <p class="text-2xl font-semibold text-gray-900">{{ $pendingOrders }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center">
                    <div class="p-3 bg-green-100 rounded-lg">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Completados</p>
                        <p class="text-2xl font-semibold text-gray-900">{{ $completedOrders }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center">
                    <div class="p-3 bg-red-100 rounded-lg">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Cancelados</p>
                        <p class="text-2xl font-semibold text-gray-900">{{ $cancelledOrders }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lista de Pedidos -->
        <div class="bg-white rounded-lg shadow">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-900">Pedidos Recientes</h2>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">N° Pedido</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cliente</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Teléfono</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Productos</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Estado</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($orders as $order)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="text-sm font-medium text-gray-900">{{ $order->order_number }}</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $order->customer_name }}</div>
                                @if($order->customer_notes)
                                <div class="text-xs text-gray-500 mt-1">
                                    <strong>Notas:</strong> {{ Str::limit($order->customer_notes, 50) }}
                                </div>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $order->customer_phone }}</div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    @foreach(array_slice($order->products, 0, 2) as $product)
                                    <div class="flex items-center space-x-2 mb-1">
                                        <span class="bg-gray-100 px-2 py-1 rounded text-xs">
                                            {{ $product['quantity'] }}x
                                        </span>
                                        <span class="text-xs">{{ $product['name'] }}</span>
                                    </div>
                                    @endforeach
                                    @if(count($order->products) > 2)
                                    <div class="text-xs text-gray-500 mt-1">
                                        +{{ count($order->products) - 2 }} más...
                                    </div>
                                    @endif
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-semibold text-gray-900">
                                    ${{ number_format($order->total_amount, 2) }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full status-{{ $order->status }}">
                                    {{ ucfirst($order->status) }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    {{ $order->created_at->format('d/m/Y') }}
                                </div>
                                <div class="text-xs text-gray-500">
                                    {{ $order->created_at->format('H:i') }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <button onclick="showOrderDetails({{ $order->id }})"
                                            class="text-blue-600 hover:text-blue-900 text-xs">
                                        Ver
                                    </button>
                                    @if($order->status == 'pending')
                                    <form action="{{ route('admin.orders.update-status', $order->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="status" value="confirmed">
                                        <button type="submit" class="text-green-600 hover:text-green-900 text-xs">
                                            Confirmar
                                        </button>
                                    </form>
                                    <form action="{{ route('admin.orders.update-status', $order->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="status" value="cancelled">
                                        <button type="submit" class="text-red-600 hover:text-red-900 text-xs">
                                            Cancelar
                                        </button>
                                    </form>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            @if($orders->isEmpty())
            <div class="text-center py-12">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                </svg>
                <h3 class="mt-2 text-sm font-medium text-gray-900">No hay pedidos</h3>
                <p class="mt-1 text-sm text-gray-500">No se han realizado pedidos aún.</p>
            </div>
            @endif
        </div>

        <!-- Paginación -->
        @if($orders->hasPages())
        <div class="mt-6">
            {{ $orders->links() }}
        </div>
        @endif
    </div>

    <!-- Modal para ver detalles del pedido -->
    <div id="orderModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-2xl p-6 max-w-2xl mx-4 max-h-96 overflow-y-auto">
            <div id="orderModalContent">
                <!-- Contenido cargado por JavaScript -->
            </div>
            <div class="mt-6 text-center">
                <button onclick="closeOrderModal()" class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-lg">
                    Cerrar
                </button>
            </div>
        </div>
    </div>

    <script>
        function showOrderDetails(orderId) {
            fetch(`/admin/orders/${orderId}`)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const order = data.order;
                        const modalContent = `
                            <h3 class="text-xl font-bold mb-4">Detalles del Pedido</h3>
                            <div class="grid grid-cols-2 gap-4 mb-6">
                                <div>
                                    <p><strong>N° Pedido:</strong> ${order.order_number}</p>
                                    <p><strong>Cliente:</strong> ${order.customer_name}</p>
                                    <p><strong>Teléfono:</strong> ${order.customer_phone}</p>
                                </div>
                                <div>
                                    <p><strong>Total:</strong> $${parseFloat(order.total_amount).toFixed(2)}</p>
                                    <p><strong>Estado:</strong> <span class="status-${order.status} px-2 py-1 rounded">${order.status}</span></p>
                                    <p><strong>Fecha:</strong> ${new Date(order.created_at).toLocaleString()}</p>
                                </div>
                            </div>
                            ${order.customer_notes ? `<p><strong>Notas:</strong> ${order.customer_notes}</p>` : ''}
                            <h4 class="font-semibold mt-4 mb-2">Productos:</h4>
                            <div class="space-y-2">
                                ${order.products.map(product => `
                                    <div class="flex justify-between items-center border-b pb-2">
                                        <div>
                                            <span class="font-semibold">${product.quantity}x</span>
                                            <span>${product.name}</span>
                                        </div>
                                        <span class="font-semibold">$${parseFloat(product.price * product.quantity).toFixed(2)}</span>
                                    </div>
                                `).join('')}
                            </div>
                        `;
                        document.getElementById('orderModalContent').innerHTML = modalContent;
                        document.getElementById('orderModal').classList.remove('hidden');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error al cargar los detalles del pedido');
                });
        }

        function closeOrderModal() {
            document.getElementById('orderModal').classList.add('hidden');
        }
    </script>
</body>
</html>
