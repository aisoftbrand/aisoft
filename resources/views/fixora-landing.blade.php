
<x-default-layout>
    <div class="bg-gray-50">
        <div class="container mx-auto px-4 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="text-gray-800">
                    <h2 class="text-4xl font-bold mb-4">Effortless, Comprehensive Fleet Management in Your Hands</h2>
                    <p class="text-lg text-gray-600">Discover How Our Solution Empowers You to Streamline and Optimize Fleet Management</p>
                </div>
                <div>
                    <div class="relative flex items-center justify-center">
                        <div class="absolute w-64 h-64 bg-purple-200 rounded-full opacity-50"></div>
                        <div class="absolute w-48 h-48 bg-purple-300 rounded-full opacity-50"></div>
                        <div class="relative w-32 h-32 bg-purple-500 rounded-full flex items-center justify-center text-white text-4xl font-bold">P</div>
                        <div class="absolute top-0 left-0 w-16 h-16 bg-red-400 rounded-full flex items-center justify-center text-white">A</div>
                        <div class="absolute top-0 right-0 w-16 h-16 bg-green-400 rounded-full flex items-center justify-center text-white">B</div>
                        <div class="absolute bottom-0 left-0 w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center text-white">C</div>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-blue-400 rounded-full flex items-center justify-center text-white">D</div>
                        <div class="absolute top-1/2 left-0 transform -translate-y-1/2 w-16 h-16 bg-indigo-400 rounded-full flex items-center justify-center text-white">E</div>
                        <div class="absolute top-1/2 right-0 transform -translate-y-1/2 w-16 h-16 bg-pink-400 rounded-full flex items-center justify-center text-white">F</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800">Product Benefits</h2>
                <p class="text-lg text-gray-600">A quick rundown of our most popular features.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-teal-100 p-8 rounded-lg shadow-md">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Real-Time GPS Tracking</h3>
                    <p class="text-gray-600">Monitor vehicle locations in real-time, optimize routes, and improve overall efficiency.</p>
                </div>
                <div class="bg-purple-100 p-8 rounded-lg shadow-md">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Advanced Reporting & Analytics</h3>
                    <p class="text-gray-600">Generate custom reports for insights into fleet performance, fuel usage, and driver activity.</p>
                </div>
                <div class="bg-orange-100 p-8 rounded-lg shadow-md">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Total Costs</h3>
                    <p class="text-gray-600">Get a complete overview of all your fleet-related expenses.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-start">
                <div class="text-gray-800">
                    <h2 class="text-4xl font-bold mb-4">Frequently asked questions</h2>
                    <p class="text-lg text-gray-600">All types of businesses need access to development resources, so we give you the option to decide how much you need to use.</p>
                </div>
                <div>
                    <div class="space-y-4">
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-md">
                            <div @click="open = !open" class="flex justify-between items-center cursor-pointer">
                                <h4 class="text-lg font-semibold text-gray-800">How do I pay for the Essentials or Premium plan?</h4>
                                <span x-text="open ? '-' : '+'" class="text-2xl text-gray-500"></span>
                            </div>
                            <div x-show="open" class="mt-4 text-gray-600">
                                You can pay with a credit card or via net banking (if you're in United States). We will renew your subscription automatically at the end of every billing cycle.
                            </div>
                        </div>
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-md">
                            <div @click="open = !open" class="flex justify-between items-center cursor-pointer">
                                <h4 class="text-lg font-semibold text-gray-800">Can I cancel my Essentials or Premium plan subscription at any time?</h4>
                                <span x-text="open ? '-' : '+'" class="text-2xl text-gray-500"></span>
                            </div>
                            <div x-show="open" class="mt-4 text-gray-600">
                                Yes, you can cancel your subscription at any time from your account settings.
                            </div>
                        </div>
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-md">
                            <div @click="open = !open" class="flex justify-between items-center cursor-pointer">
                                <h4 class="text-lg font-semibold text-gray-800">We need to add new users to our team. How will that be billed?</h4>
                                <span x-text="open ? '-' : '+'" class="text-2xl text-gray-500"></span>
                            </div>
                            <div x-show="open" class="mt-4 text-gray-600">
                                You can add new users at any time. The billing will be prorated based on your current plan.
                            </div>
                        </div>
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-md">
                            <div @click="open = !open" class="flex justify-between items-center cursor-pointer">
                                <h4 class="text-lg font-semibold text-gray-800">My team wants to cancel its subscription. How do we do that? Can we get a refund?</h4>
                                <span x-text="open ? '-' : '+'" class="text-2xl text-gray-500"></span>
                            </div>
                            <div x-show="open" class="mt-4 text-gray-600">
                                Please contact our support team to process the cancellation and refund request.
                            </div>
                        </div>
                        <div x-data="{ open: false }" class="bg-white p-6 rounded-lg shadow-md">
                            <div @click="open = !open" class="flex justify-between items-center cursor-pointer">
                                <h4 class="text-lg font-semibold text-gray-800">Do you offer discounts for non-profit organizations or educational institutions?</h4>
                                <span x-text="open ? '-' : '+'" class="text-2xl text-gray-500"></span>
                            </div>
                            <div x-show="open" class="mt-4 text-gray-600">
                                Yes, we offer special discounts for non-profits and educational institutions. Please contact us for more details.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-16">
        <div class="container mx-auto px-4">
            <div class="bg-gradient-to-r from-gray-800 to-black rounded-lg p-12 text-white">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div>
                        <h2 class="text-4xl font-bold mb-4">Ready to get start your free trial?</h2>
                        <p class="text-lg text-gray-300 mb-6">With lots of unique blocks, you can easily build a page without coding. Build your next landing page.</p>
                        <a href="#" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 px-6 rounded-lg">14 days free trial</a>
                    </div>
                    <div class="text-center">
                        <p class="text-6xl font-bold">1.2M+</p>
                        <p class="text-gray-300">Active user</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-default-layout>
