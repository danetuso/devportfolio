<?php
if ( basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"]) ) { 
    header("Location: ./");
} else {
    return [
        0 => [
            'name' => 'Digital Ocean API',
            'description' => 'A project for handling Digital Ocean droplets on the unix commandline. It can be used to quickly manage droplets from the CLI, as well as be used in combination with provisioning scripts (Ex. Ansible) for one click deployments.',
            'http' => 'https://github.com/danetuso/DigitalOceanAPI',
            'image' => 'images/project.jpg',
        ],
        1 => [
            'name' => 'Stick RPG 1.5',
            'description' => 'Recreation and additions to one of my favorite games StickRPG by XGEN Studios using Java AWT through the JTwoD engine.',
            'http' => 'https://github.com/danetuso/StickRPG1.5',
            'image' => 'images/project.jpg',
        ],
        2 => [
            'name' => 'The Beacon: Chapter 1',
            'description' => 'The Beacon is a chapter based psychological thriller, with a heavy focus on immersion and story-line created in Unreal Engine 4.',
            'http' => 'http://www.indiedb.com/games/the-beacon-chapter-1',
            'image' => 'images/project.jpg',
        ],
        3 => [
            'name' => 'Mist of the Dark',
            'description' => '"Visualistic Studios®: Mist of the Dark®, developed and produced in-house, using the versatile Unreal Engine 4® game engine, combines the passion for a truly horrifying and enjoyable game with the experience of a dedicated development team. The result is a new breed of horror game. A fully multiplayer experience that will have you looking over your shoulder at every turn. This is a horror game like no other."',
            'http' => 'http://www.indiedb.com/games/mist-of-the-dark',
            'image' => 'images/project.jpg',
        ],
    ];
}