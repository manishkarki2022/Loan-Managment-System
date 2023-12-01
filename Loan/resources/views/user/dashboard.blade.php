
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="flex flex-col h-screen bg-gray-100">
        
       @include('user.sections.header')

        <!-- Main Content -->
        <div class="flex-1">
            <div class="flex h-full">
                <!-- Sidebar -->
                @include('user.sections.sidebar')

                <!-- Page content -->
                <div class="flex-1 p-10">
                   @yield('content')
                </div>
            </div>
        </div>

        <!-- Footer -->
       @include('user.sections.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
   
    <script>
        const profileButton = document.getElementById('profileButton');
        const profileDropdown = document.getElementById('profileDropdown');

        profileButton.addEventListener('click', () => {
            profileDropdown.classList.toggle('hidden');
        });

        window.addEventListener('click', (event) => {
            if (!profileDropdown.contains(event.target) && !profileButton.contains(event.target)) {
                profileDropdown.classList.add('hidden');
            }
        });
    </script>
    <script>
         function calculateInstallment() {
            const amountInput = document.getElementById('amount');
            const installmentCountsInput = document.getElementById('installment_counts');
            const installmentAmountInput = document.getElementById('installment_amount');
            const amountPlusTenPercentInput = document.getElementById('amount_plus_ten_percent');

            const amountValue = parseFloat(amountInput.value);
            const installmentCountsValue = parseFloat(installmentCountsInput.value);

            if (!isNaN(amountValue) && !isNaN(installmentCountsValue) && installmentCountsValue !== 0) {
                const installmentAmountValue = (amountValue * 1.1) / installmentCountsValue;
                const amountPlusTenPercentValue = amountValue * 1.1;

                installmentAmountInput.value = installmentAmountValue.toFixed(2);
                amountPlusTenPercentInput.value = amountPlusTenPercentValue.toFixed(2);
            } else {
                installmentAmountInput.value = '';
                amountPlusTenPercentInput.value = '';
            }
        }
    </script>
  
</body>
</html>
