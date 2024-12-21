<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan Owner</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100">

  <div class="flex h-screen">
    <div class="w-64 bg-gray-800 text-white">
      <div class="p-4 font-bold text-2xl text-center border-b border-gray-700">Admin Dashboard</div>
      <nav class="mt-6">
        <a href="homeAdmin" class="block px-4 py-2 hover:bg-gray-700">Dashboard</a>
        <a href="index" class="block px-4 py-2 hover:bg-gray-700">Home</a>
        <a href="kelolaUser" class="block px-4 py-2 hover:bg-gray-700">Kelola User</a>
        <a href="kelolaKasir" class="block px-4 py-2 hover:bg-gray-700">Kelola Kasir</a>
        <a href="kelolaMekanik" class="block px-4 py-2 hover:bg-gray-700">Kelola Mekanik</a>
        <a href="barang" class="block px-4 py-2 hover:bg-gray-700">Kelola Barang</a>
        <a href="kelolaBooking" class="block px-4 py-2 hover:bg-gray-700">Kelola Booking</a>
        <a href="#" class="block px-4 py-2 bg-gray-700">Laporan Owner</a>
      </nav>
    </div>

    <div class="flex-1 p-6">
      <h1 class="text-3xl font-semibold mb-6 text-gray-800">Laporan Owner</h1>

      <div class="bg-white p-4 rounded shadow mb-6">
        <h2 class="text-xl font-semibold mb-4">Total Pendapatan: <span class="text-green-600">Rp 1.000.000</span></h2>
        <p class="text-gray-600">Laporan ini pendapatan dari perbulan.</p>
      </div>

      <div class="bg-white p-4 rounded shadow" style="height: 400px;">
        <h3 class="text-lg font-semibold mb-4 text-gray-800">Grafik Pendapatan Bulanan</h3>
        <canvas id="pendapatanChart"></canvas>
      </div>
    </div>
  </div>

  <script>
    const ctx = document.getElementById('pendapatanChart').getContext('2d');
    const pendapatanChart = new Chart(ctx, {
      type: 'bar', 
      data: {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'], 
        datasets: [{
          label: 'Pendapatan (Rp)',
          data: [1000000, 1200000, 1500000, 1800000, 2000000, 2200000],
          backgroundColor: 'rgba(34, 197, 94, 0.6)', 
          borderColor: 'rgba(34, 197, 94, 1)', 
          borderWidth: 1,
          borderRadius: 5, 
          barThickness: 40 
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: true,
            position: 'top',
            labels: {
              color: '#333'
            }
          },
          tooltip: {
            callbacks: {
              label: function(context) {
                let value = context.raw;
                return 'Rp ' + value.toLocaleString('id-ID'); 
              }
            }
          }
        },
        scales: {
          y: {
            beginAtZero: true,
            ticks: {
              callback: function(value) {
                return 'Rp ' + value.toLocaleString('id-ID');
              },
              color: '#333'
            },
            title: {
              display: true,
              text: 'Pendapatan (Rp)',
              color: '#333'
            }
          },
          x: {
            ticks: {
              color: '#333'
            },
            title: {
              display: true,
              text: 'Bulan',
              color: '#333'
            }
          }
        }
      }
    });
  </script>
</body>
</html>
