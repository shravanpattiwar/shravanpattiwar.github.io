<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Research Paper Showcase</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1.25em 0;
        }

        section {
            max-width: 1200px;
            margin: 2em auto;
            padding: 1em;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1, h2 {
            color: #333;
        }

        p {
            line-height: 1.6;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
         .fancy-button {
            display: inline-block;
            padding: 15px 30px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            background-color: grey;
            color: #fff;
            border: 2px solid white;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
            cursor: pointer;
        }

        .fancy-button:hover {
            background-color: #2980b9;
            color: #fff;
        }
    </style>
</head>
<body>

    <header>
        
    </header>
<h1 align="center">DEAR</h1>
    <section>
    
        <h2>DEAR: DRL Empowered Actor-critic scheduleR
for multipath QUIC under 5G/B5G hybrid
networks</h2>
<div style="border: 2px solid grey; border-radius: 5px; padding: 10px; margin-bottom: 10px; max-width: 600px">
        <p><strong>Authors:</strong></p>
        <p><strong> Pattiwar Shravan Kumar</strong> , BITS Pilani Hyderabad Campus, India</p>
        <p><strong> Paresh Saxena</strong> , BITS Pilani Hyderabad Campus, India </p>
        <p><strong>Ozgu Alay</strong>, University of Oslo, Norway and Karlstad University, Sweden </p>
</div>
        <p><strong>Abstract:</strong> </p>
        <p align="justify"> This is a brief summary of the research paper. It provides an overview of the problem, methodology, results, and conclusions. Recently, the Internet has experienced a substantial increase in the use of bandwidth-intensive applications due to the introduction of fifth generation (5G) and beyond 5G (B5G) systems. Empirical evidence has shown that multipath transport layer protocols such as multipath TCP (MPTCP) and multipath QUIC (MPQUIC) are successful in addressing the increasing need for higher bandwidth in the exist- ing Internet infrastructure. Nevertheless, multipath schedulers still face difficulties in efficiently handling significant amounts of variability in diverse network scenar- ios. This paper introduces, Deep reinforcement learning (DRL) Empowered Actor- critic schduleR, DEAR, a method designed for multipath QUIC in 5G/B5G hybrid networks. DEAR is developed utilising a DRL based actor critic methodology. This approach significantly improves the decision-making abilities of the scheduler in various rapidly changing network scenarios. We conducted experiments with the DEAR scheduler in several network settings, encompassing networks with rapidly fluctuating bandwidth, networks with rapid and short-term fluctuations, and net- works experiencing progressive outages. We also conducted tests on the DEAR al- gorithm using the Lumos5G dataset, which consists of real network traces from two distinct service providers. We have performed a comparative analysis of DEAR with other state-of-the-art multipath schedulers, including another scheduler based on RL, Peekaboo, and other non-RL rule-based schedulers such as round robin (RR), earliest completion first (ECF), blocking estimation (BLEST), and minimum round trip time (minRTT). Our evaluation demonstrates DEAR’s superior performance compared to existing algorithms. In scenarios with fast-changing bandwidth, DEAR outperforms rule-based schedulers by 42.30% and Peekaboo by 17.77%. Similarly, in networks with fast short-scale variations, DEAR achieves gains of 22.22% over..... <a href="gffh">Read Full Paper</a></p> 
        <p><strong>Keywords:</strong> Multipath Networking, MPQUIC, Schedulers, 5G/B5G Networks</p>

        <!-- Add more sections as needed (e.g., Introduction, Methodology, Results, Conclusion, References) -->
<table align="center">
<tr>
<td>
<img src="dearImg/convergence.png" height="350px" width="500px">
</td>
<td>
<img src="dearImg/cpu.png" height="350px" width="500px">
</td></tr>
<tr align="center">
<td><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Convergence</h2></td>
<td><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPU Testing</h2></td>
</tr>
</table>
<a href="" class="fancy-button">source code(coming soon)</a>
    </section>
<h1>Thank You</h1>
    <footer>
        &copy; 2024 All rights reserved to authors
    </footer>

</body>
</html>

