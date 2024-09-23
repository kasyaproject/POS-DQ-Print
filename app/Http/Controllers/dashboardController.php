<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\customer;
use App\Models\preorder;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    //
    public function index()
    {
        // Generate perhitungan bulan ini
        $percentageOrder = $this->generateOrder();
        $totalCurrentMonthOrder = $percentageOrder['current'];
        $totalOrderPercentageChange = $percentageOrder['percentage'];

        $percentageCust = $this->generateCust();
        $totalCurrentMonthCust = $percentageCust['current'];
        $totalCustPercentageChange = $percentageCust['percentage'];

        $percentageIncome = $this->generateIncome();
        $totalCurrentMonthIncome = $percentageIncome['current'];
        $totalIncomePercentageChange = $percentageIncome['percentage'];

        // Generate chartline
        $monthlyIncomes = $this->generateChatline();
        //dd($monthlyIncomes);

        // Generate Piechart
        $Analisis = $this->pieChart();
        $PercentageA3 = $Analisis['a3'];
        $PercentageOutdoor = $Analisis['outdoor'];
        $PercentageIndoor = $Analisis['indoor'];

        return view('dashboard', compact(
            //data untuk perhitungan bulan ini
            'totalCurrentMonthOrder',
            'totalOrderPercentageChange',
            'totalCurrentMonthCust',
            'totalCustPercentageChange',
            'totalCurrentMonthIncome',
            'totalIncomePercentageChange',

            //data untuk charline
            'monthlyIncomes',

            //data untuk piechart
            'PercentageA3',
            'PercentageOutdoor',
            'PercentageIndoor',
        ));
    }

    public function pieChart()
    {
        // Menghitung jumlah preorder dengan kategori a3
        $a3Count = Preorder::where('kategori', 'A3+')->count();

        // Menghitung jumlah preorder dengan kategori outdoor
        $outdoorCount = Preorder::where('kategori', 'Outdoor')->count();

        // Menghitung jumlah preorder dengan kategori indoor
        $indoorCount = Preorder::where('kategori', 'Indoor')->count();

        // Menghitung total jumlah preorder
        $totalPreorders = $a3Count + $outdoorCount + $indoorCount;

        // Menghitung persentase
        $a3Percentage = $totalPreorders > 0 ? ($a3Count / $totalPreorders) * 100 : 0;
        $outdoorPercentage = $totalPreorders > 0 ? ($outdoorCount / $totalPreorders) * 100 : 0;
        $indoorPercentage = $totalPreorders > 0 ? ($indoorCount / $totalPreorders) * 100 : 0;

        return [
            'a3' => $a3Percentage,
            'outdoor' => $outdoorPercentage,
            'indoor' => $indoorPercentage,
        ];
    }

    public function generateChatline()
    {
        $monthlyIncomes = [];
        $currentDate = Carbon::now();

        for ($i = 0; $i < 12; $i++) {
            $startOfMonth = $currentDate->copy()->subMonths($i)->startOfMonth();
            $endOfMonth = $startOfMonth->copy()->endOfMonth();

            $monthlyIncome = Preorder::whereBetween('created_at', [$startOfMonth, $endOfMonth])
                ->sum('harga_total');

            $monthlyIncomes[$startOfMonth->format('Y-m')] = $monthlyIncome;
        }

        // Mengurutkan bulan secara descending
        $monthsDescending = array_keys($monthlyIncomes);
        krsort($monthsDescending);

        // Membangun kembali array dengan bulan yang sudah diurutkan
        $sortedMonthlyIncomes = [];
        foreach ($monthsDescending as $month) {
            $sortedMonthlyIncomes[$month] = $monthlyIncomes[$month];
        }

        return $sortedMonthlyIncomes;
    }

    public function generateOrder()
    {
        // Tanggal untuk bulan sebelumnya
        $lastMonth = Carbon::now()->subMonth();
        // Tanggal untuk bulan sekarang
        $currentMonth = Carbon::now();

        // Mengambil total preorder untuk bulan sebelumnya
        $totalLastMonthOrder = preorder::whereYear('created_at', $lastMonth->year)
            ->whereMonth('created_at', $lastMonth->month)
            ->count();

        // Mengambil total preorder untuk bulan sekarang
        $totalCurrentMonthOrder = preorder::whereYear('created_at', $currentMonth->year)
            ->whereMonth('created_at', $currentMonth->month)
            ->count();

        // Menghitung persentase perubahan pemasukan dari bulan sebelumnya ke bulan sekarang
        $totalOrderPercentageChange = $totalLastMonthOrder != 0 ? round((($totalCurrentMonthOrder - $totalLastMonthOrder) / $totalLastMonthOrder) * 100, 1) : 0;

        // Jika totalLastMonthIncome adalah 0, maka tetapkan persentase perubahan sebagai 100%
        $totalOrderPercentageChange = $totalLastMonthOrder == 0 ? 100 : $totalOrderPercentageChange;
        return [
            'current' => $totalCurrentMonthOrder,
            'percentage' => $totalOrderPercentageChange,
        ];
    }

    public function generateCust()
    {
        // Tanggal untuk bulan sebelumnya
        $lastMonth = Carbon::now()->subMonth();
        // Tanggal untuk bulan sekarang
        $currentMonth = Carbon::now();

        // Mengambil total preorder untuk bulan sebelumnya
        $totalLastMonthCust = customer::whereYear('created_at', $lastMonth->year)
            ->whereMonth('created_at', $lastMonth->month)
            ->count();

        // Mengambil total preorder untuk bulan sekarang
        $totalCurrentMonthCust = customer::whereYear('created_at', $currentMonth->year)
            ->whereMonth('created_at', $currentMonth->month)
            ->count();

        // Menghitung persentase perubahan pemasukan dari bulan sebelumnya ke bulan sekarang
        $totalCustPercentageChange = $totalLastMonthCust != 0 ? round((($totalCurrentMonthCust - $totalLastMonthCust) / $totalLastMonthCust) * 100, 1) : 0;

        // Jika totalLastMonthIncome adalah 0, maka tetapkan persentase perubahan sebagai 100%
        $totalCustPercentageChange = $totalLastMonthCust == 0 ? 100 : $totalCustPercentageChange;

        return [
            'current' => $totalCurrentMonthCust,
            'percentage' => $totalCustPercentageChange,
        ];
    }

    public function generateIncome()
    {
        // Tanggal untuk bulan sebelumnya
        $lastMonth = Carbon::now()->subMonth();
        // Tanggal untuk bulan sekarang
        $currentMonth = Carbon::now();

        // Mengambil total pemasukan untuk bulan sebelumnya
        $totalLastMonthIncome = preorder::whereYear('created_at', $lastMonth->year)
            ->whereMonth('created_at', $lastMonth->month)
            ->sum('harga_total');

        // Mengambil total pemasukan untuk bulan sekarang
        $totalCurrentMonthIncome = preorder::whereYear('created_at', $currentMonth->year)
            ->whereMonth('created_at', $currentMonth->month)
            ->sum('harga_total');

        // Menghitung persentase perubahan pemasukan dari bulan sebelumnya ke bulan sekarang
        $totalIncomePercentageChange = $totalLastMonthIncome != 0 ? round((($totalCurrentMonthIncome - $totalLastMonthIncome) / $totalLastMonthIncome) * 100, 1) : 0;

        // Jika totalLastMonthIncome adalah 0, maka tetapkan persentase perubahan sebagai 100%
        $totalIncomePercentageChange = $totalLastMonthIncome == 0 ? 100 : $totalIncomePercentageChange;

        return [
            'current' => $totalCurrentMonthIncome,
            'percentage' => $totalIncomePercentageChange,
        ];
    }
}
