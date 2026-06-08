<?php include('header.php') ?>

<style>
    .resume-container {
        width: 850px;
        max-width: 100%;
        min-height: 1100px;
        margin: 0 auto 60px;
        background: white;
        position: relative;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }

    .eyebrow-resume {
        font-size: 9px;
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: #666;
    }
</style>

<div class="bg-background py-16 px-4">
    <!-- LAYOUT 7: Brutalist Grid Blocks -->
    <div class="resume-container">
        <!-- Name Block -->
        <div class="absolute top-0 left-0 w-[500px] h-[200px] border-r-4 border-b-4 border-black p-8 flex items-center">
            <h1 class="text-7xl font-black leading-[0.85] tracking-tighter">
                Alex<br/>Guffey
            </h1>
        </div>

        <!-- Title Block -->
        <div class="absolute top-0 left-[500px] w-[350px] h-[200px] bg-background border-b-4 border-black p-8 flex flex-col justify-center">
            <div class="text-lg font-bold mb-2">Sr. UX Designer</div>
            <div class="text-xs">Orlando, FL</div>
            <div class="text-xs">alex@example.com</div>
        </div>

        <!-- Skills Block -->
        <div class="absolute top-[200px] left-0 w-[280px] h-[900px] border-r-2 border-black p-6">
            <div class="eyebrow-resume mb-4">Skills</div>
            <div class="text-[10px] space-y-3">
                <div>
                    <div class="font-bold mb-1">Design</div>
                    <div>Figma, Adobe XD, Sketch, Illustrator</div>
                </div>
                <div>
                    <div class="font-bold mb-1">Code</div>
                    <div>React, TypeScript, HTML/CSS, Git</div>
                </div>
                <div>
                    <div class="font-bold mb-1">Systems</div>
                    <div>Design Tokens, Components</div>
                </div>
                <div>
                    <div class="font-bold mb-1">Methods</div>
                    <div>Research, Prototyping, Testing</div>
                </div>
            </div>

            <div class="mt-8 pt-8 border-t-2 border-black">
                <div class="eyebrow-resume mb-4">Education</div>
                <div class="text-xs space-y-3">
                    <div>
                        <div class="font-bold">SCAD</div>
                        <div class="text-[10px]">MA, Design Mgmt</div>
                        <div class="text-[10px] text-gray-600">In Progress</div>
                    </div>
                    <div>
                        <div class="font-bold">UCF</div>
                        <div class="text-[10px]">BA, Digital Media</div>
                        <div class="text-[10px] text-gray-600">2018</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Experience Block -->
        <div class="absolute top-[200px] left-[280px] w-[570px] h-[900px] p-8">
            <div class="eyebrow-resume mb-6">Experience</div>

            <div class="space-y-5">
                <div class="pb-4 border-b-2 border-black">
                    <div class="flex justify-between items-baseline mb-1">
                        <div class="font-bold text-lg">Disney Experiences</div>
                        <div class="text-[10px]">2020 – Present</div>
                    </div>
                    <div class="text-sm font-semibold mb-2">Sr. UX Designer</div>
                    <ul class="text-[11px] space-y-1 list-disc pl-4">
                        <li>Led design system strategy for 50+ WordPress sites, reducing build time by 70%</li>
                        <li>Designed and developed React component library used across 15+ applications</li>
                        <li>Collaborated with engineering to implement design tokens and theming</li>
                        <li>Conducted user research sessions with internal stakeholders</li>
                        <li>Mentored junior designers and established design review processes</li>
                    </ul>
                </div>

                <div class="pb-4 border-b-2 border-black">
                    <div class="flex justify-between items-baseline mb-1">
                        <div class="font-bold text-lg">Previous Company</div>
                        <div class="text-[10px]">2018 – 2020</div>
                    </div>
                    <div class="text-sm font-semibold mb-2">UX Designer</div>
                    <ul class="text-[11px] space-y-1 list-disc pl-4">
                        <li>Designed user interfaces for web and mobile applications</li>
                        <li>Created wireframes, prototypes, and high-fidelity mockups</li>
                        <li>Worked with developers to ensure implementation quality</li>
                        <li>Participated in usability testing and design critiques</li>
                    </ul>
                </div>

                <div class="pb-4 border-b-2 border-black">
                    <div class="flex justify-between items-baseline mb-1">
                        <div class="font-bold text-lg">Agency Name</div>
                        <div class="text-[10px]">2017 – 2018</div>
                    </div>
                    <div class="text-sm font-semibold mb-2">Junior Designer</div>
                    <ul class="text-[11px] space-y-1 list-disc pl-4">
                        <li>Supported senior designers on client projects</li>
                        <li>Created digital assets and marketing materials</li>
                        <li>Assisted with user research and testing</li>
                    </ul>
                </div>

                <div class="pb-4 border-b-2 border-black">
                    <div class="flex justify-between items-baseline mb-1">
                        <div class="font-bold text-lg">Internship</div>
                        <div class="text-[10px]">Summer 2017</div>
                    </div>
                    <div class="text-sm font-semibold mb-2">Design Intern</div>
                    <ul class="text-[11px] space-y-1 list-disc pl-4">
                        <li>Contributed to design projects</li>
                        <li>Created mockups and prototypes</li>
                    </ul>
                </div>

                <div>
                    <div class="flex justify-between items-baseline mb-1">
                        <div class="font-bold text-lg">Freelance</div>
                        <div class="text-[10px]">2016 – 2017</div>
                    </div>
                    <div class="text-sm font-semibold mb-2">Graphic Designer</div>
                    <ul class="text-[11px] space-y-1 list-disc pl-4">
                        <li>Designed logos and branding for small businesses</li>
                        <li>Created marketing materials and social media content</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <a href="index.php" class="inline-block py-4 px-8 bg-primary border-3 border-black font-bold text-white text-sm lowercase tracking-wide transition-all duration-200">
            ← Back to Portfolio
        </a>
    </div>
</div>

<?php include('footer.php') ?>
