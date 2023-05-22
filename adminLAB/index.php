<?php
    include('./include/navbar.php');
    ?>
    <div class="p-4 sm:ml-64">

        <div class="p-4 border-2 border-blue-500 border-dashed rounded-lg dark:border-gray-700 mt-14">

            <div class="flex flex-wrap my-4">
                <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                    <div class="relative flex flex-col min-w-0 break-words bg-pink-400 shadow-lg rounded-2xl ">
                        <div class="flex-auto p-4">
                            <div class="flex flex-row -mx-3">
                                <div class="flex-none w-2/3 max-w-full px-3">
                                    <div>
                                        <p
                                            class="mb-0 font-sans font-semibold leading-normal uppercase text-white  text-sm">
                                            Total Visitors</p>
                                        <p class="mb-0 font-bold text-2xl text-white ">
                                            100 <i class='bx bxs-up-arrow-alt'></i>
                                        </p>
                                    </div>
                                </div>
                                <div class="px-3 text-right basis-1/3">
                                    <img class="w-16" src="../assets/img/icon/visitors.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                    <div class="relative flex flex-col min-w-0 break-words bg-blue-400 shadow-lg rounded-2xl ">
                        <div class="flex-auto p-4">
                            <div class="flex flex-row -mx-3">
                                <div class="flex-none w-2/3 max-w-full px-3">
                                    <div>
                                        <p
                                            class="mb-0 font-sans font-semibold leading-normal uppercase text-white  text-sm">
                                            Total Messages</p>
                                        <?php

                                        $sql = "SELECT * from messages";
                                        if ($result = mysqli_query($db, $sql)) {
                                            $rowcount = mysqli_num_rows($result); ?>
                                            <p class="mb-0 font-bold text-2xl text-white ">
                                                <?= $rowcount; ?> <i class='bx bxs-up-arrow-alt'></i>
                                            </p>
                                        <?php } ?>
                                    </div>
                                </div>

                                <div class="px-3 text-right basis-1/3">
                                    <img class="w-16" src="../assets/img/icon/chat.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                    <div class="relative flex flex-col min-w-0 break-words bg-green-400 shadow-lg rounded-2xl ">
                        <div class="flex-auto p-4">
                            <div class="flex flex-row -mx-3">
                                <div class="flex-none w-2/3 max-w-full px-3">
                                    <div>
                                        <p
                                            class="mb-0 font-sans font-semibold leading-normal uppercase text-white  text-sm">
                                            Total Courses</p>
                                        <?php
                                        $sql = "SELECT * from coursetbl";
                                        if ($result = mysqli_query($db, $sql)) {
                                            $rowcount = mysqli_num_rows($result); ?>
                                            <p class="mb-0 font-bold text-2xl text-white ">
                                                <?= $rowcount; ?> <i class='bx bx-plus'></i>
                                            </p>
                                        <?php } ?>
                                    </div>
                                </div>

                                <div class="px-3 text-right basis-1/3">
                                    <img class="w-16" src="../assets/img/icon/Courses.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                    <div class="relative flex flex-col min-w-0 break-words bg-yellow-400 shadow-lg rounded-2xl ">
                        <div class="flex-auto p-4">
                            <div class="flex flex-row -mx-3">
                                <div class="flex-none w-2/3 max-w-full px-3">
                                    <div>
                                        <p
                                            class="mb-0 font-sans font-semibold leading-normal uppercase text-white  text-sm">
                                            Total Subjects</p>
                                        <?php
                                        $sql = "SELECT * from subjecttbl";
                                        if ($result = mysqli_query($db, $sql)) {
                                            $rowcount = mysqli_num_rows($result); ?>
                                            <p class="mb-0 font-bold text-2xl text-white ">
                                                <?= $rowcount; ?> <i class='bx bx-plus'></i>
                                            </p>
                                        <?php } ?>
                                    </div>
                                </div>

                                <div class="px-3 text-right basis-1/3">
                                    <img class="w-16" src="../assets/img/icon/subject.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- upperbar end -->
            <div
                class="py-4 mt-10 bg-white border border-gray-200 rounded-lg shadow-sm sm:p-6 dark:border-gray-700 dark:bg-gray-800 xl:mb-0">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="flex text-lg self-center font-semibold text-gray-900 dark:text-white">
                        <img src="../assets/img/icon/chat.png" class="w-8 mr-1" alt="">
                        All Messages
                    </h3>
                    <a href="./messages.php"
                        class="inline-flex items-center bg-indigo-500 p-2 text-sm font-medium rounded-md text-white hover:bg-indigo-700 dark:text-blue-500 dark:hover:bg-gray-700">
                        View all
                    </a>
                </div>
                <div class="flex flex-col" id="">
                    <div class="overflow-x-auto">
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden shadow rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200  table-fixed dark:divide-gray-600">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-indigo-200 dark:bg-pink-700 dark:text-pink-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Email
                                            </th>
                                            <th scope="col" class="px-6 py-3 hide_obj">
                                                Contact No.
                                            </th>
                                            <th scope="col" class="px-6 py-3 hide_obj">
                                                Subject
                                            </th>
                                            <th scope="col" class="px-6 py-3 ">
                                                Message
                                            </th>
                                            <th scope="col" class="px-6 py-3 hide_obj">
                                                Date & Time
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = "SELECT * FROM messages LIMIT 2";
                                        $query_run = mysqli_query($db, $query);

                                        if (mysqli_num_rows($query_run) > 0) {

                                            foreach ($query_run as $row) {
                                                ?>
                                                <tr class=" text-sm bg-white border-b dark:bg-pink-800 dark:border-pink-700">
                                                    <td class="px-6 py-4 font-medium text-indigo-600">
                                                        <?= $row['email']; ?>
                                                    </td>
                                                    <td class="px-6 py-4 hide_obj">
                                                        <?= $row['contactNo']; ?>
                                                    </td>
                                                    <td class="px-6 py-4 hide_obj font-semibold">
                                                        <?= $row['subject']; ?>
                                                    </td>
                                                    <td class="px-6 py-4 hide_obj ">
                                                        <?= $row['message']; ?>
                                                    </td>
                                                    <td class="px-6 py-4 hide_obj font-bold text-green-500">
                                                        <?= $row['timestamp']; ?>
                                                    </td>
                                                    
                                                </tr>
                                            <?php }
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- 2 box -->
            <div class="grid grid-cols-1 py-10 xl:grid-cols-2 xl:gap-4">
                <div
                    class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:p-6 dark:border-gray-700 dark:bg-gray-800 xl:mb-0">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="flex text-lg self-center font-semibold text-gray-900 dark:text-white">
                            <img src="../assets/img/icon/courses.png" class="w-8 mr-1" alt="">
                            All Courses
                        </h3>
                        <a href="./addCourses.php"
                            class="inline-flex items-center bg-indigo-500 p-2 text-sm font-medium rounded-md text-white hover:bg-indigo-700 dark:text-blue-500 dark:hover:bg-gray-700">
                            View all
                        </a>
                    </div>
                    <!-- Chat -->
                    <div class="flex flex-col" id="">
                        <div class="overflow-x-auto rounded-lg">
                            <div class="inline-block min-w-full align-middle">
                                <div class="overflow-hidden shadow">
                                    <table
                                        class="min-w-full divide-y divide-gray-200  table-fixed dark:divide-gray-600">
                                        <thead class="bg-indigo-200 dark:bg-gray-700 ">
                                            <tr>
                                                <th scope="col"
                                                    class="p-4 text-center text-xs font-medium text-left text-gray-700 uppercase dark:text-gray-400 ">
                                                    Sno.
                                                </th>
                                                <th scope="col"
                                                    class="p-4 text-center text-xs font-medium text-left text-gray-700 uppercase dark:text-gray-400 ">
                                                    Education level
                                                </th>
                                                <th scope="col"
                                                    class="p-4 text-center text-xs font-medium text-left text-gray-700 uppercase dark:text-gray-400 ">
                                                    Course Name
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="OrderID"
                                            class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                            <?php
                                            $query = "SELECT * FROM coursetbl INNER JOIN edulevel ON  coursetbl.id_edu = edulevel.id_edu LIMIT 5";
                                            $query_run = mysqli_query($db, $query);
                                            if (mysqli_num_rows($query_run) > 0) {
                                                foreach ($query_run as $row) {
                                                    ?>
                                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                                                        <td style="font-size:14px"
                                                            class="max-w-sm p-4 overflow-hidden text-center text-base font-normal text-blue-500 truncate xl:max-w-xs dark:text-gray-400">
                                                            <?= $row['id_course']; ?></td>
                                                        <td style="font-size:14px"
                                                            class="p-4 text-base uppercase text-center font-medium text-green-500 whitespace-nowrap dark:text-blue-500">
                                                            <?= $row['eduType']; ?></td>
                                                        <td style="font-size:14px"
                                                            class="p-4 text-base text-center font-medium text-pink-500 whitespace-nowrap dark:text-white">
                                                            <?= $row['courseName']; ?></td>
                                                    </tr>
                                                <?php }
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Right Content -->
                <div
                    class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:p-6 dark:border-gray-700 dark:bg-gray-800 xl:mb-0">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="flex text-lg self-center font-semibold text-gray-900 dark:text-white">
                            <img src="../assets/img/icon/subject.png" class="w-8 mr-1" alt="">
                            All Subjects
                        </h3>
                        <a href="./addSubjects.php"
                            class="inline-flex items-center bg-indigo-500 p-2 text-sm font-medium rounded-md text-white hover:bg-indigo-700 dark:text-blue-500 dark:hover:bg-gray-700">
                            View all
                        </a>
                    </div>
                    <!-- Chat -->
                    <div class="flex flex-col" id="">
                        <div class="overflow-x-auto rounded-lg">
                            <div class="inline-block min-w-full align-middle">
                                <div class="overflow-hidden shadow">
                                    <table
                                        class="min-w-full divide-y divide-gray-200  table-fixed dark:divide-gray-600">
                                        <thead class="bg-indigo-200 dark:bg-gray-700 ">
                                            <tr>
                                                <th scope="col"
                                                    class="p-4 text-center text-xs font-medium text-left text-gray-700 uppercase dark:text-gray-400 ">
                                                    Sno.
                                                </th>
                                                <th scope="col"
                                                    class="p-4 text-center text-xs font-medium text-left text-gray-700 uppercase dark:text-gray-400 ">
                                                    Education level
                                                </th>
                                                <th scope="col"
                                                    class="p-4 text-center text-xs font-medium text-left text-gray-700 uppercase dark:text-gray-400 ">
                                                    Course Name
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="OrderID"
                                            class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                            <?php
                                            $query = "SELECT * FROM subjecttbl INNER JOIN coursetbl ON  subjecttbl.id_course = coursetbl.id_course LIMIT 5";
                                            $query_run = mysqli_query($db, $query);
                                            if (mysqli_num_rows($query_run) > 0) {
                                                foreach ($query_run as $row) {
                                                    ?>
                                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                                                        <td style="font-size:14px"
                                                            class="max-w-sm p-4 overflow-hidden text-center text-base font-normal text-blue-500 truncate xl:max-w-xs dark:text-gray-400">
                                                            <?= $row['id_sub']; ?></td>
                                                        <td style="font-size:14px"
                                                            class="p-4 text-base uppercase text-center font-medium text-green-500 whitespace-nowrap dark:text-blue-500">
                                                            <?= $row['courseName']; ?></td>
                                                        <td style="font-size:14px"
                                                            class="p-4 text-base text-center font-medium text-pink-500 whitespace-nowrap dark:text-white">
                                                            <?= $row['subjectName']; ?></td>
                                                    </tr>
                                                <?php }
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>


</body>

</html>