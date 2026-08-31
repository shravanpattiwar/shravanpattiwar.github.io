<!-- START C 10/07/2019 -1 -->
<h4>&nbsp;</h4>
<h4><span style="text-decoration: underline;"><strong>10/07/2019</strong></span></h4>
<h1><strong>Objectives of Operating System</strong></h1>
<p><strong>The objectives of the operating system are</strong> &minus;</p>
<ul>
<li>To make the computer system convenient to use in an efficient manner.</li>
<li>To hide the details of the hardware resources from the users.</li>
<li>To provide users a convenient interface to use the computer system.</li>
<li>To act as an intermediary between the hardware and its users, making it easier for the users to access and use other resources.</li>
<li>To manage the resources of a computer system.</li>
<li>To keep track of who is using which resource, granting resource requests, and mediating conflicting requests from different programs and users.</li>
<li>To provide efficient and fair sharing of resources among users and programs.</li>
</ul>
<hr>
<!-- END C 10/07/2019 -1 -->


<!-- START C 11/07/2019 -2 -->
<h4>&nbsp;</h4>
<p><strong>11/07/2019</strong></p>
<h2>Characteristics/ Services /Functionalities of Operating System</h2>
<p>Here is a list of some of the most prominent characteristic features of Operating Systems &minus;</p>
<ul>
<li><strong>Memory Management</strong>&minus; Keeps track of the primary memory, i.e. what part of it is in use by whom, what part is not in use, etc. and allocates the memory when a process or program requests it.</li>
<li><strong>Processor Management</strong>&minus; Allocates the processor (CPU) to a process and deallocates the processor when it is no longer required.</li>
<li><strong>Device Management</strong>&minus; Keeps track of all the devices. This is also called I/O controller that decides which process gets the device, when, and for how much time.</li>
<li><strong>File Management</strong>&minus; The system that an operating system or program uses to organize and keep track of files. For example, a hierarchical file system is one that uses directories to organize files into a tree structure.</li>
<li><strong>Security</strong>&minus; Prevents unauthorized access to programs and data by means of passwords and other similar techniques.</li>
<li><strong>Job Accounting</strong>&minus; Keeps track of time and resources used by various jobs and/or users.</li>
<li><strong>Control Over System Performance</strong>&minus; Records delays between the request for a service and from the system.</li>
<li><strong>Interaction with the Operators</strong>&minus; Interaction may take place via the console of the computer in the form of instructions. The Operating System acknowledges the same, does the corresponding action, and informs the operation by a display screen.</li>
<li><strong>Error-detecting Aids</strong>&minus; Production of dumps, traces, error messages, and other debugging and error-detecting methods.</li>
 <li><strong>Coordination Between Other Software and Users</strong>&nbsp;&minus; Coordination and assignment of compilers, interpreters, assemblers, and other software to the various users of the computer systems
  </li>
</ul>
<hr>
<!-- END C 11/07/2019 -2 -->

<!-- START C 12/07/2019 -2 -->

<h2><p><strong><u>Operating System Structure:</u></strong></p></h2>
<p>An Operating System (OS) is an interface between a computer user and computer hardware. An operating system is a software which performs all the basic tasks like file management, memory management, process management, handling input and output, and controlling peripheral devices such as disk drives and printers.</p>
<p>Some popular Operating Systems include Linux Operating System, Windows Operating System, VMS, OS/400, AIX, z/OS, etc.</p>
<p><strong>Simple Defination of OS</strong></p>
<p>An operating system is a program that acts as an interface between the user and the computer hardware and controls the execution of all kinds of programs.</p>
<p><img src="https://media.geeksforgeeks.org/wp-content/uploads/os.png" alt="srtructure of os" width="500" height="251" align="center" /></p>
<p>&nbsp;</p>
<p><img src="https://www.tutorialspoint.com/operating_system/images/conceptual_view.jpg" alt="" width="343" height="355" /></p>
<p>&nbsp;</p>
<p><img src="https://upload.wikimedia.org/wikipedia/commons/e/e1/Operating_system_placement.svg" alt="" width="250" height="370" /></p>
<p>&nbsp;</p>
<hr>
<!-- END C 12/07/2019 -2 -->


<!-- START C 15/07/2019 -2 -->
<h4><span style="text-decoration: underline;"><strong>15/07/2019</strong></span></h4>
<h1><span style="text-decoration: underline;"><strong>System call</strong></span><strong> :</strong></h1>
<p>In computing, a&nbsp;<strong>system call</strong>&nbsp;is the programmatic way in which a computer program requests a service from the kernel of the operating system it is executed on. A system call is a way for programs to&nbsp;<strong>interact with the operating system</strong>. A computer program makes a system call when it makes a request to the operating system&rsquo;s kernel. System call&nbsp;<strong>provides</strong>&nbsp;the services of the operating system to the user programs via Application Program Interface(API). It provides an interface between a process and operating system to allow user-level processes to request services of the operating system. System calls are the only entry points into the kernel system. All programs needing resources must use system calls.</p>
<p><strong>Services Provided by System Calls :</strong></p>
<ol>
<li>Process creation and management</li>
<li>Main memory management</li>
<li>File Access, Directory and File system management</li>
<li>Device handling(I/O)</li>
<li>Protection</li>
<li>Networking, etc.</li>
</ol>
<p><strong>Types of System Calls :</strong>&nbsp;There are 5 different categories of system calls &ndash;</p>
<ol>
<li><strong>Process control:</strong>end, abort, create, terminate, allocate and free memory.</li>
<li><strong>File management:</strong>create, open, close, delete, read file etc.</li>
<li>Device management</li>
<li>Information maintenance</li>
<li>Communication</li>
<li></li>
<strong>Examples of Windows and Unix System Calls &ndash;</strong>
<table width="512">
<tbody>
<tr>
<td>&nbsp;</td>
<td>
<p><strong>WINDOWS</strong></p>
</td>
<td>
<p><strong>UNIX</strong></p>
</td>
</tr>
<tr>
<td>
<p>Process Control</p>
</td>
<td>
<p>CreateProcess()<br /> ExitProcess()<br /> WaitForSingleObject()</p>
</td>
<td>
<p>fork()<br /> exit()<br /> wait()</p>
</td>
</tr>
<tr>
<td>
<p>File Manipulation</p>
</td>
<td>
<p>CreateFile()<br /> ReadFile()<br /> WriteFile()<br /> CloseHandle()</p>
</td>
<td>
<p>open()<br /> read()<br /> write()<br /> close()</p>
</td>
</tr>
<tr>
<td>
<p>Device Manipulation</p>
</td>
<td>
<p>SetConsoleMode()<br /> ReadConsole()<br /> WriteConsole()</p>
</td>
<td>
<p>ioctl()<br /> read()<br /> write()</p>
</td>
</tr>
<tr>
<td>
<p>Information Maintenance</p>
</td>
<td>
<p>GetCurrentProcessID()<br /> SetTimer()<br /> Sleep()</p>
</td>
<td>
<p>getpid()<br /> alarm()<br /> sleep()</p>
</td>
</tr>
<tr>
<td>
<p>Communication</p>
</td>
<td>
<p>CreatePipe()<br /> CreateFileMapping()<br /> MapViewOfFile()</p>
</td>
<td>
<p>pipe()<br /> shmget()<br /> mmap()</p>
</td>
</tr>
<tr>
<td>
<p>Protection</p>
</td>
<td>
<p>SetFileSecurity()<br /> InitlializeSecurityDescriptor()<br /> SetSecurityDescriptorGroup()</p>
</td>
<td>
<p>chmod()<br /> umask()<br /> chown()</p>
</td>
</tr>
</tbody>
</table>
</li>
</ol>
<hr>
<!-- END C 15/07/2019 -2 -->
<h1><strong>Process control block (PCB):-</strong></h1>
<p>&nbsp;is a data structure which is associated with any process and provides all the complete information about that process. The process control block is "the manifestation of a process in an operating system". Process control block is important in multiprogramming environment as it captures the information pertaining to the number of processes running simultaneously.</p>
<p><strong>The following are the various components that are associated with the process control block PCB:</strong></p>
<p><strong>1. Process ID:</strong><br />In computer system there are various process running simultaneously and each process has its unique ID. This Id helps system in scheduling the processes. This Id is provided by the process control block.<br />In other words, it is an identification number that uniquely identifies the processes of computer system.</p>
<p><strong>2. Process state:</strong><br />As we know that the process state of any process can be New, running, waiting, executing, blocked, suspended, terminated. For more details regarding process states you can refer&nbsp;process management of an Operating System.<br />Process control block is used to define the process state of any process.<br />In other words, process control block refers the states of the processes.</p>
<p><strong>3. Program counter:</strong><br />Program counter is used to point to the address of the next instruction to be executed in any process. This is also managed by the process control block.</p>
<p><strong>4. General Purpose Register Information:</strong><br />This information is comprising with the various registers, such as index and stack that are associated with the process. This information is also managed by the process control block.</p>
<p><strong>List of Open Files:</strong></p>
<p>These are the different files that are associated with the process</p>
<p><strong>List of Open Files:</strong></p>
<p>These are the different Devices that are opened associated with the process</p>