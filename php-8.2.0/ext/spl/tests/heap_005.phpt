--TEST--
SPL: SplMinHeap: large unordered input iterated
--FILE--
<?php
$input = range(1,100);
shuffle($input);

$h = new SplMinHeap();

foreach($input as $i) {
    $h->insert($i);
}

foreach ($h as $k => $o) {
    echo "$k => $o\n";
}
?>
--EXPECT--
99 => 1
98 => 2
97 => 3
96 => 4
95 => 5
94 => 6
93 => 7
92 => 8
91 => 9
90 => 10
89 => 11
88 => 12
87 => 13
86 => 14
85 => 15
84 => 16
83 => 17
82 => 18
81 => 19
80 => 20
79 => 21
78 => 22
77 => 23
76 => 24
75 => 25
74 => 26
73 => 27
72 => 28
71 => 29
70 => 30
69 => 31
68 => 32
67 => 33
66 => 34
65 => 35
64 => 36
63 => 37
62 => 38
61 => 39
60 => 40
59 => 41
58 => 42
57 => 43
56 => 44
55 => 45
54 => 46
53 => 47
52 => 48
51 => 49
50 => 50
49 => 51
48 => 52
47 => 53
46 => 54
45 => 55
44 => 56
43 => 57
42 => 58
41 => 59
40 => 60
39 => 61
38 => 62
37 => 63
36 => 64
35 => 65
34 => 66
33 => 67
32 => 68
31 => 69
30 => 70
29 => 71
28 => 72
27 => 73
26 => 74
25 => 75
24 => 76
23 => 77
22 => 78
21 => 79
20 => 80
19 => 81
18 => 82
17 => 83
16 => 84
15 => 85
14 => 86
13 => 87
12 => 88
11 => 89
10 => 90
9 => 91
8 => 92
7 => 93
6 => 94
5 => 95
4 => 96
3 => 97
2 => 98
1 => 99
0 => 100
