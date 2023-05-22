<?php
include('./include/session.php');

?>
<html>

<head>
    <title>Admin Panel - KUMAR PATHOLOY CLINIC</title>
    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <nav
        class="fixed shadow-md text-white top-0 z-50 w-full bg-blue-500 border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button" onclick="openNav()" id="openBtn"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button" onclick="closeNav()" id="closeBtn"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" class="w-4 h-4" aria-hidden="true"
                            fill="currentColor" viewBox="0 0 121.31 122.876" enable-background="new 0 0 121.31 122.876"
                            xml:space="preserve">
                            <g>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M90.914,5.296c6.927-7.034,18.188-7.065,25.154-0.068 c6.961,6.995,6.991,18.369,0.068,25.397L85.743,61.452l30.425,30.855c6.866,6.978,6.773,18.28-0.208,25.247 c-6.983,6.964-18.21,6.946-25.074-0.031L60.669,86.881L30.395,117.58c-6.927,7.034-18.188,7.065-25.154,0.068 c-6.961-6.995-6.992-18.369-0.068-25.397l30.393-30.827L5.142,30.568c-6.867-6.978-6.773-18.28,0.208-25.247 c6.983-6.963,18.21-6.946,25.074,0.031l30.217,30.643L90.914,5.296L90.914,5.296z" />
                            </g>
                        </svg>
                    </button>

                    <script>
                        function closeNav() {
                            console.log('sd');
                            document.getElementById("logo-sidebar").style.left = "-16rem";
                            document.getElementById("closeBtn").style.display = "none";
                            document.getElementById("openBtn").style.display = "block";

                        }

                        function openNav() {
                            console.log('sd');
                            document.getElementById("logo-sidebar").style.left = "0";
                            document.getElementById("openBtn").style.display = "none";
                            document.getElementById("closeBtn").style.display = "block";
                        }

                    </script>
                    <a href="#" class="flex ml-2 md:mr-24">
                        <img src="../assets/img/logo.png" class="h-8 mr-3" alt="FlowBite Logo" />
                        <span class="self-center text-white font-bold whitespace-nowrap ">
                            <span class="ml-3 text-xl ">KUMAR PATHOLOGY CLINIC -</span>
                            Admin
                            Pannel</span>
                    </a>
                </div>
                <div class="flex  inline-block  pr-6">

                    <div class="relative text-sm ">
                        <button id="userButton" class="flex items-center focus:outline-none mr-3">
                            <img class="w-8 h-8 rounded-full mr-4"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAABdFBMVEX///8AAAD90aPH7v2bm5vHbTb/u4WY5ftaWloFkvsBgfurXi7w8PCfn5//1qfM9P+CgoKc6/96k5z/2KjY2Nh4eHitra3Zn3H+xJKIo62k5/tVgIxvb2+rjW5ZWVnO9/8+Pj52Yk3QrIaTk5NbSztRUVE3Nzfxx5sbGxsuNztfcnkDWpv/wYmLi4soKChejZtANSkiHBaReF0RERHNzc3jvJMfHx8sLCwBUJt7e3s8PDxkZGQ8R0zk5OTAaTS5ubnCjmUuGQzBn3zS0tKu0N1onaxkNxuCRyNWLxc8IRCRUCczKiGfg2aiws4UCwUgEQhgNRp0QB9ALyGCa1RmVEJQYGY1T1cAHTkCRHWTsLsDivtEJRKhWCw7MCZSRDUmFQqSakvnrn6acVB7WkCyg11wUjpaQi9who8Fg+GKz+MEccEBDxp6t8kAFioBbtcCNFkAQoEBdeMBZcUBL1EANWiLttF6xP84ovsBRoiZ1f1gt/8DUYszb7LFAAAWc0lEQVR4nO2d+38TR5LAkSVAQk8sy6x3ZUm2kCwT5GCPJa0RMmAcDH6BwQ4hGAIBQjabZBM2d7e398/fzHRVv3tGtmY8gs/WDwmSe2b6O1VdXV390Llz/5GhJDMYrE4n2mulcr+frCT7/XJprVCfXp0aZKKu2ugydbver3VjJmnVkoXb9z5ZznuJhhFNlGbhdtSVPbFkpvtD0qHUEoOoKz28ZKaTJ8T7tCAHJetUfK70V6Ouvq9MebS9fVsefffI+Z+50NJ4N8kpnXnefXF/6/g4vb5+nsn6evr4eOv+g4ca1ub46jGzpsA9ONhOn/eS9fT2/RfyZZUxbY+rUvt7sHWcTq978iHm8cF34rWJqGF0Uhaa3OPtdHpIPiLprbv8DWpjp8ZBk6vew630CfkI5GOeccxaI2+hL1z1pb3bn17WDzjEbNRQvNzm9Ad8J1UgMt5ntypEjcWEAT4i9nlqQFvSzLW2owZDWWXuMz0yoC1b9H71qNGITNEKoQJP0wQFNdI7jkeA08LqbAcEaLfGh3jPqajpbMFA7dFxICYKgo2xGzUe52UCBTx/HrW4FjVgxpJNdHQbdWX90Zj0/BhsbwUMyNxNLVrAgdxNBGSjjmyPhT+FcHs/HbgKz1NvE6mzySg2GpwK7aY4BkqskyrcDUWF588fRN8SW7IfDVKFTInRjRVXh1Rh+nh76+DxgxcP7xJ5+OLF44Ot7WNfjcNAI7oRP3QVB0YVrqe3DmgAppW797eOzYpPR22mTSmaEQjXj+97w3GYj035qofRmil0hg81RpreGpaOKfNYQwi+JipvCiHpgUy4LiaVhpb9A0WTYKZRjfYL5PGSJ00/OBUekYfbEiL5uhERIYyb0jzhsdk6l3de3nj16uqrVzde7iwbS323pWuIERGSmc/vOCNN6/iezK3MzncWFhYmHMm5/7U/deZnd5++0jHyeoSGGM0kKoRsLOg+Vuzzyes7byZyxWKOcImSy+XsPyxs7L6SJ6vusvYI4Xc0QyggpI7mQKzmk7dXLlz/04SOTQItTszvSso8QMJj8nk6EsJ7IqEwv7LzvY134bofHafOzqwAiWoEZxpNdhg6CzKu2Oanyd47eBcu/GlYQKDsPOUZt3lnGk3cBoRuZ7HFVe3tm+sn53OlOLHLvagDjjCa3PA0I+Sa4Ps3Dt6pAB1FLqywWz1mhNF0+YyQAe5cIXwXTsXn6rFzld7tPiUsRUvITPTthVEBHcZZHnEcCLdphe4A30iAjhp38I5b40C4hc5h+UowgE5rpJaaHgNCzNwuvwkK0JFDuCssTImUEKuCTfCUXlSS3FXh7uNA+CZQQFtujBkhdTKB2Kgtuc54Eb4OGtBG3Bgnwh3kGz7Y9pfi4RgRBm6jriyMD+EP10NQoa3ElbEhvBKKCnklRkzIVBgwYW5lTAjfUcKg+kKUzpgQvglJhbYSb4wFYWhGahPujgVheEY6kZsfC8IrF0IjnJiwxoBw/0JoRmp3ia/GgPBJeM2Q9ReREr4NlXB2DAjfhUo4P1aEgQalIJ0xILwTXmfhyBgQXlEJc9rZND/RXpUbB0K1O9x9OntyxOLG05WOctlYErpjnp2TAubcEf28jDiOhLk59+uVk2kRnObLT0GHRTIeuFpUKlssmqmxa+/oCc96LXRm9bYtawYdGghz83Ovdo2ERW/CivPA1TNaGjWoi7vPhyQkZnjjlIQoa2ewO6Edk2RIwiKZTzI52SEJY7F+yIocLMlPHFqHpPTTUQlDXuQ2pT7v7AnDXHqS0e1DP3vCENcPac9JiICwFRYg3YV3Y3Zjfn5+5QwJD+3nzc/SiYywdu3hYQIbxZyzJm32DAnnyCM7uKYxHMAMBSTPPltC8mkBFg2E409vCw8zEkLUdngyQribteBJSFeihBPFwfYRHOEYdUi+38hpq2oihMH8nBLriYQTC8ROw1k0XBLfsonQNThr1lBVI2Fu3q77ofq1RAjpxVoohGQX17Ivod1aOgumoeyK6zK0C2onOuoAWCW8Og6Eeh2R0ofzG474L6z99AiLMUGGTXN8SoTS8ny5W/gMCFdEwiGzHJ8QIb+y4jMlpHOBn6uVOuu4uCVASn/5ORA6HSXpKzY21P7y8yB0M/emHv8zITyxnCkhiUv3IyYMMy5ti04wGsIJkpQMZ2wB48MVn/FhqIS46DSceQw8AwNGAMMQOqMM727BLtHxKiEOunKgwrByprB1e7/jzrDg69TMkNLq7Voxa8ULoLhhh6tz/oTuTXLFBdzfFtKOS3rYztyG426A0DzLDe/AaxjR4TWkFSC0/7UwT0Pb0KaiajGNmFcqkEnP2A2zEmFObVnOzsivQJbQNs0OdE/73rjaBPZM7HgQzpF7GAmlYBYkxJmLVc3jzCuGYCn6jtkGoYRZh7lZzRNDPcVNg2he9VUEDZmHEcWXbgHjrKIyqnQk5B2zGeWUWfPKPVwdqiw/oLJApnoOjQWKynb2MzihdrUsPdPYIWIjMvYX2OGYR8M5abarcUYnZKxOZxOJRJYEqh4raGFYb1x5gntGzEqGd9Rwn5e9fdYHD4BrfW9uiGBjhh4Rtzb5O5rITooiQc6yuSFCBS2DCmEHnpLKV0pEdowStEiPuA2ajzxNQ6qPPYGvJ6pFBYhh3FtzVINr7TXOhnbmr4wqRBuI7jBanFE0munEBOaBFXfJNt+Zu8sctON7kRHixL7ZmzKOQ2EYlZugXblH4hQ8UZSH7kGIs2xeCF1kZ13sTsC6tlwxt0H3o5vjGRoTRXqcMHTIXuuEuahkbrZjdwydDe6Ej32PvCJmySP9DZMsqcMTj5YoblmWRTNlKKswGSUg9TXvvHYgXjXhxZY9AOlW5yEC0cwAJARESMCxXl+3YF8zQHDlqlfqG8bPQ6TVEvSs5pjVDtykUYlvvVbsF+d3VDyfuQvqhf1UOJB+iijw9ZmwQsN7p2xuYvalhGeteGfhIJyJVfwqoKyWDFyL2KRMYyhknJ/janE46zM3Q7eq+zWthGIagedSMQP33me7s3Pa1cbs7tOV2dl537mZIoZ7vgGbZrlk0IR0xeL3/ju6c+SMNm+6CS5m9Q1ndMmxwIM8uuqU9vujpvfZmRi+PQVEVbWkI7C0MPgVtjRTfCUYxNwCxuv+8Ro4unbWEfhQDpyQrW4PBJEBDjHDRNRm1ROuEL96M3hCuvI0iJOicuyUKH+/nyFMzawLmIWkfAihTYZ2Su9GRcx16KF0Q/TdsLS+AYT9IVvvKYS5tNejIRbZqTRi+mm1YsVaa7JWwQWUgBDOjJWT4pl2d/REJEP8Ac9TOkVbzE08NQBilyQlvMvoaEg7BFfTFwvhtvoRJ47ZVoz9O6dFLHbYSEt0+RX6fY3Z7lQBZjRbCZAsxKi9NWaoA+7a0QI6ru99f+E0Zyfm+DGIqEFWSWaD02yuDxyNTch+ua8Hx2Vm+UtHRMz02K2+B8YT8OU2uABM9BXSLw4u3TuXqfNf9CmhMONQyJwbSFOezZEIhR0n++8I45BqLE5scIOPnuju1Z9UlKZOCkiYqIt/KClXNkccefAP2H99xTnHdIgt7Lniwiw/gJRiEmqipt+kpUYqmKko9NoRDfXcPSHUf2Ir8rrP4uicrb5DoTJSWEn10MhqdyVZyQQv/ZauUIVd29fXfGiR3+HO6zu2qeaKOZ0UJxaUM5LlTU3UR1eyiWy9KRVuluvZrEBoR6dleb3Bkt2bMMQR4wGdlSz/8HbF3SnFizNUPJQH/q5OxBtizFshE2xlzkha/baERyH7/Mi/75aiiCMG5sP+yLFZJB0mOUCnnnVUkFVO6PCgWKKEjE0MBxBxmBR6ZjBlEPDOLW1j8BNSJ+uecEd4ZW1KAxOzfa36eEUSdZdpORxc+eztG0yX5LagkcX481snxFucjF/zouf106/161kZKCsjO+WSXLksVNzL1Qyy2jVDOsJ8fvPD4tB41rW9eL7qRch6dYIjwiXaBUfamr+wD9iJmiPwgdp/mgltycc3J4fRZO+DjZe3y3sScnYq6i5Raiyh+7GWGqWEwXzrUMg8Pla2qfsROpD5/N7MtUVTV91aPJrZi1fzUNibsKepuI2ntpmm1gVR8zONOqdO5DuQkFDaCHvqLvfYZDxerebzrKA3oWCnpNL1vv4nwK2k3EzpwhFj6iervdNQhLZUn2tr8iGe50v5Ecbqkn2WzT9xbimuFsqaugrx56i//vLLr4jMKLKoEubjR+zaZz9+w72IzapKaKk3heI3BS+ixDei9IR2S+NVQ0DDxYOLX/3tMsqf84pUbymE+efcc79IpVI//Z19nsyrhHHlppNQusy5fuU3wBXhS0N6w7QwtUAv+vrny5cvovw5ropCmOd7uWc/plzh1HhrM68QqgL9DhtESEF4t9es1WrNXlew2worDm5mST+wYCex8nxaQIWwusf50X+lUH7i6jGJlmomrIKdLilG50ivUUmiVBrcMDxWo+HMTfKF3s3Q4P7rixyfHlAiFBT4y6+XLlHE1D9UNfrrsJFVAW8mZakxRSJiFsaYllaHqISjixd9AUXCPN9H/HbJEYb4BfeuZ/KehHl0Ne2sbKJNhc8R5oPQULG71y2+xWH70eUhAHnCfPwDY3j28dIlCfFHTo1H8byXDheF6jInYzWQqdGw22GDmmuDqrEsvRQVEGexFwXAiwZAjrC6yYelzy5dUhA5fxOznleNhPk9KJQQ9RFrARAXtXVr0B5p80e9QxF1Xgpjtb8NY6M8IXp4I+I3YoGjeNVAWIXutC9OTsS6SrNzBRjR4yzBVRB3K8k2nBv8ajgVImFsRgm5ZcRv5AItiBZayk2hQF200RbRnxrztojt4h+wWwQSOSyFnuLWxeFUGM9/UB6oR1QAqSxWpVuCn8HZF6x5hZsTlYSoEZAscKeQLJB9DXjZn4dUIWszKLeYufKIFPAoLr+TSTFYxTAJkqJ0lOcqyjRcrfH0xLqz0N5qWj/TvTykCm0zFYe9M9V4VYPIAKtiUGALB2ePMJ/jOBp6+yy0r55ZgxQROo0uXAkfm4XpAesWYZb8y+EJ45vcc0hfnlcQf8MvrrkkQvpiBlRY3dz7cMT1p8RIaYDpqJCbzbiZLJcLZdZJkL/jMctZOdCzkm043g4GTT+LzdALkLfTSfxKQqSAR+o1AJhXkjZrWT6acVVI+RtrhUKh7kzkUwrX0UKslhRfDkrf0SRccPkEhLRyRyymFg2VAbKgO/7BEq7ZVIZ+MDhsMRWhjVrltpujIa0NTb7GlFwWu0QmU7gYf/FEhDZQfG9vL867xCq96bNf/6D/3hTeyyZ/jZLEAk8K7qLFdQdWyc1CYYyNZx5aVIkYr6uTAi38zeajEzRDWmFBNuV7uzKTN1wjDCmJRhJCv13jXaULSMf/6DPB2basBs1oqNM2WViz9peTE0q8k/KtXblVNZU/4ov1kqW6NKhoME/ZbPMq5MYRPQjpuLRUtr7WFzIDtaAIq5o8lCPGNwKtzeo2ym0+1Yt9hVN1KFOCTCknMVbIbovCn5ybtcsskA2KUG+ksdjzvL58HrRQlxPZ4NvdZkj+2S2IRppggWsFCJXUouN0G4ESYtzFfAz868hgpnnyiptq3ch1S8xPNgqSkTKPQsLTypp2eqoSKCEODn7/nZA9+/jtL0QBplfiQ9hjjkZHyLkjm7B8BoTQubnd/cePH3+3A1MI2/b0ZnoCwoqGsHTWhOj7f7vEQm9IRX0YmdBDh2ClpTMghADsIwX8NpUiXy0aroj5t0PwNDWNp6nwhMnCGVgp8et/51SYSv2T3HpTewEQdsvKdBlRrsUIYxpC6JtIBqDblMzUuWO93AySEPqKPwRCSLVNas00z5KeNyulNpsvwxEQF3f35f4QI+wWHUA1WH/qzDRyeQ8rEEIc9gtGmvrRk1AcWCzRKV8cqDfY6LcrN0Q6DmRdCvBnE+WaGHv0AyGsQigsqDCVeuZ+uae/Rs4UYMoM3SRX+1ijLSiRxtfcWwBnU1cGF6uBEIKR/lMi/NGZnzH4Us1EG6TMIHtr8XnfijC2wHnCJS6yg9ej5Dz654IgxIDmr4KRulnvL/7LAGiLgtgWTJAfH4I/Je2MjpC4Ei1ohxrAIAgxkfS7QphK/beZML93JFanLKQi+CG841QK7YKzeqhEXVSPy5lCAkSaj+u7KxYCIIRs5zPJSF35HzOhk4diaagYnWTBSYYGnxKNOd6o0eAGRi0+UdUWEiBO4bVpXP04OiEGNP/SEaZ8bpXPV+N7M9AHQkIYGpPbEivGae4K9wIwcCAfrewqPwE1OmFVF9CgfOthpsodymI+yZ11qujXT1hCMnVNuFDaCzc6YZx0QL9oVZj69xCEaAXSngpipxXdQpaWkA6HVSpZ/Zah0QmhZ/tDT5ga5hYQw+EsEl2lS+JONe1N5hRpq5MuywRMqA9omJn+7zBKhHvU5PlRGDw0hdbYI9/S5HBDVKG8qG10HYIzNKgw9e/NuCkdxQSTIDgVSHsJnCxs9Iixtno1nFLEIphKRBXKO/dGJjQENCg/2WP9a75qxNQbtkQWfbFJ7ooj9BN9B/StALI0LzM6IaYR1YCGRG7uH6/5aZEm/XHzD1tiZ9WSqjSYh10Ttwup6xJHJfQKaNgQyv9FgRJxURQfnnRrFYmPc684NKR5VhlwdCslN9AGNLb8H/mzIVvDvahJsVGJEZjVq+GKhUatx7sdOvbFpqvuKh6R0DugoQuHfM0UXQ03lG1L4YzV6rbkCIflLzBpoS69HJEQ04i/6o00lSIr3Hp+LwqDcC65m034LVfu8Ssw0TkpCxWQUBB3wZ5UB73ESZMwBDQpOtm9WTXcgCzcwwVDSTH/7bH40pa+sIyWTo4ntIRffynK5OTkzCbHWN2cmdQKdNXP/krlC1Fg0dCR/nIUqFxXXqle95jllnP5OLCUd9B6vCM2NWaYWQpcNBMQ9YZWjw3NmnA67BIJe7rrQRQ/ELJU1Fo7jGVpxZB1U9koREpisCeG3nX1QVSeYzuZ8SgUnHQ1fG7Ns/VCv1FbalktexTcL2jx3IKoLiH2zng8kkZ4tz0KBSfcFJK8e4R+Nn1PPmEkJDob3YGlRGrsNXjZclDS4KpaWop1yyZVcXxrPaEc2mlNIDw3KOmH0X1O14PRt3P5CpuMh61dvYInYzYL26Dpxi679yC3kjbH2SrSyjBlAhHoyJYSYIdsg2xzzcho87GAgG5MwGS4TBix4CrzrqNFaQtCq19X9nO5c9hlIXm/RNSIl0Z6/JtGqLNzENVtss1+WwxeEu3+TaVU0v6evpvIDtI0CXXVSwX9HpIlPlxt690ed23IxxCfRvx3JHEqNG0iozJuNuqKgthbFTcKsnGguDqvv6p4+bEEVBCdWg74MTDtLIWla/17+kvHUvh6NmEUm0nQJrdECWkfYdXBoQid9dgC8oh8zDVVbwEOEkIU3uaThtOfAqDtUQlLRXL1MDTAfAWEntKZdBmw3RB/ZTcIydwulNrKSWwQN+NWjJIBZapeWpuO9BjUUwscioMJf0g4ncGPd5+dkI4cF/KTT61PU1sGgSZGXA1k1ML5IaGoZBpdjbs2Fj5EXalABVyN1XUEhrKRncIfjsRUGbvBw2iipr6jPOA8DFHzYGPesZ9c5PNIPi9P6op4JEkIh5dGL4N2uUKkX/iswpkg5P8BsN2S7/kjOvMAAAAASUVORK5CYII="
                                alt="Avatar of User">
                            <span class="hidden md:inline-block">Hi, Admin
                            </span>
                            <svg class="pl-2 h-2 " fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink"
                                enable-background="new 0 0 129 129">
                                <g>
                                    <path
                                        d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z">
                                    </path>
                                </g>
                            </svg>
                        </button>
                        <div id="userMenu"
                            class="bg-white nunito rounded shadow-md mt-2 absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">
                            <ul class="list-reset">
                                <li><a href="./settings.php"
                                        class="px-4 py-2 block text-gray-900 hover:bg-indigo-500 hover:text-white no-underline hover:no-underline">My
                                        account</a></li>
                                <li>
                                    <hr class="border-t mx-2 border-gray-400">
                                </li>
                                <li><a href="./include/logout.php"
                                        class="px-4 py-2 block text-red-400 hover:bg-red-400 hover:text-white no-underline hover:no-underline">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <script>
        /*Toggle dropdown list*/
        var userMenuDiv = document.getElementById("userMenu");
        var userMenu = document.getElementById("userButton");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //User Menu
            if (!checkParent(target, userMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, userMenu)) {
                    // click on the link
                    if (userMenuDiv.classList.contains("invisible")) {
                        userMenuDiv.classList.remove("invisible");
                    } else {
                        userMenuDiv.classList.add("invisible");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    userMenuDiv.classList.add("invisible");
                }
            }

        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }
    </script>

    <!-- sidenavbar -->
    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidebar">

        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
            <ul class="space-y-2">
                <li>
                    <a href="./index.php"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-indigo-50 dark:hover:bg-gray-700">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                            </path>
                        </svg>
                        <span class="ml-3">Home</span>
                    </a>
                </li>
                <li>
            <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-layouts" data-collapse-toggle="dropdown-layouts" aria-expanded="true">
                <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                </svg>
                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item="">Layouts</span>
                <svg sidebar-toggle-item="" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <ul id="dropdown-layouts" class="py-2 space-y-2">
              <li>
                <a href="https://flowbite-admin-dashboard.vercel.app/layouts/stacked/" class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Stacked</a>
              </li>
              <li>
                <a href="https://flowbite-admin-dashboard.vercel.app/layouts/sidebar/" class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Sidebar</a>
              </li>
            </ul>
          </li>
                <li>
                    <a href="./addCourses.php"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-indigo-50 dark:hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                            <path d="M2 7v1l11 4 9-4V7L11 4z"></path>
                            <path
                                d="M4 11v4.267c0 1.621 4.001 3.893 9 3.734 4-.126 6.586-1.972 7-3.467.024-.089.037-.178.037-.268V11L13 14l-5-1.667v3.213l-1-.364V12l-3-1z">
                            </path>
                        </svg>
                        <span class="flex-1 ml-3">Add Courses</span>
                        <!-- #courses -->
                    </a>
                </li>
                <li>
                    <a href="./addSubjects.php"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-indigo-50 dark:hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M6.012 18H21V4c0-1.103-.897-2-2-2H6c-1.206 0-3 .799-3 3v14c0 2.201 1.794 3 3 3h15v-2H6.012C5.55 19.988 5 19.806 5 19s.55-.988 1.012-1zM8 9h3V6h2v3h3v2h-3v3h-2v-3H8V9z">
                            </path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Add Subjects</span>
                    </a>
                </li>
                <li>
                    <a href="./addTopics.php"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-indigo-50 dark:hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M5.282 12.064c-.428.328-.72.609-.875.851-.155.24-.249.498-.279.768h2.679v-.748H5.413c.081-.081.152-.151.212-.201.062-.05.182-.142.361-.27.303-.218.511-.42.626-.604.116-.186.173-.375.173-.578a.898.898 0 0 0-.151-.512.892.892 0 0 0-.412-.341c-.174-.076-.419-.111-.733-.111-.3 0-.537.038-.706.114a.889.889 0 0 0-.396.338c-.094.143-.159.346-.194.604l.894.076c.025-.188.074-.317.147-.394a.375.375 0 0 1 .279-.108c.11 0 .2.035.272.108a.344.344 0 0 1 .108.258.55.55 0 0 1-.108.297c-.074.102-.241.254-.503.453zm.055 6.386a.398.398 0 0 1-.282-.105c-.074-.07-.128-.195-.162-.378L4 18.085c.059.204.142.372.251.506.109.133.248.235.417.306.168.069.399.103.692.103.3 0 .541-.047.725-.14a1 1 0 0 0 .424-.403c.098-.175.146-.354.146-.544a.823.823 0 0 0-.088-.393.708.708 0 0 0-.249-.261 1.015 1.015 0 0 0-.286-.11.943.943 0 0 0 .345-.299.673.673 0 0 0 .113-.383.747.747 0 0 0-.281-.596c-.187-.159-.49-.238-.909-.238-.365 0-.648.072-.847.219-.2.143-.334.353-.404.626l.844.151c.023-.162.067-.274.133-.338s.151-.098.257-.098a.33.33 0 0 1 .241.089c.059.06.087.139.087.238 0 .104-.038.193-.117.27s-.177.112-.293.112a.907.907 0 0 1-.116-.011l-.045.649a1.13 1.13 0 0 1 .289-.056c.132 0 .237.041.313.126.077.082.115.199.115.352 0 .146-.04.266-.119.354a.394.394 0 0 1-.301.134zm.948-10.083V5h-.739a1.47 1.47 0 0 1-.394.523c-.168.142-.404.262-.708.365v.754a2.595 2.595 0 0 0 .937-.48v2.206h.904zM9 6h11v2H9zm0 5h11v2H9zm0 5h11v2H9z">
                            </path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Add Topics</span>
                    </a>
                </li>
                <li>
                    <a href="./addProjects.php"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-indigo-50 dark:hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 17.722c.595-.347 1-.985 1-1.722V5c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2v11c0 .736.405 1.375 1 1.722V18H2v2h20v-2h-2v-.278zM5 16V5h14l.002 11H5z">
                            </path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Add Projects</span>
                    </a>
                </li>
                <li>
                    <a href="./messages.php"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-indigo-50 dark:hover:bg-gray-700">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                            </path>
                            <path
                                d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                            </path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
                        <?php
                        date_default_timezone_set('Asia/Kolkata');
                        $date = date('d-m-Y');
                        $sql = "SELECT * from messages";
                        if ($result = mysqli_query($db, $sql)) {
                            $rowcount = mysqli_num_rows($result); ?>
                            <span
                                class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-green-200 rounded-full dark:bg-gray-700 dark:text-gray-300">
                                <?= $rowcount; ?>
                            </span>
                        <?php } ?>
                    </a>
                </li>

                <hr>
                <li>
                    <a href="settings.php"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-indigo-50 dark:hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                            <path
                                d="m2.344 15.271 2 3.46a1 1 0 0 0 1.366.365l1.396-.806c.58.457 1.221.832 1.895 1.112V21a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-1.598a8.094 8.094 0 0 0 1.895-1.112l1.396.806c.477.275 1.091.11 1.366-.365l2-3.46a1.004 1.004 0 0 0-.365-1.366l-1.372-.793a7.683 7.683 0 0 0-.002-2.224l1.372-.793c.476-.275.641-.89.365-1.366l-2-3.46a1 1 0 0 0-1.366-.365l-1.396.806A8.034 8.034 0 0 0 15 4.598V3a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1.598A8.094 8.094 0 0 0 7.105 5.71L5.71 4.904a.999.999 0 0 0-1.366.365l-2 3.46a1.004 1.004 0 0 0 .365 1.366l1.372.793a7.683 7.683 0 0 0 0 2.224l-1.372.793c-.476.275-.641.89-.365 1.366zM12 8c2.206 0 4 1.794 4 4s-1.794 4-4 4-4-1.794-4-4 1.794-4 4-4z">
                            </path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Settings</span>
                    </a>
                </li>



            </ul>
        </div>
    </aside>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>