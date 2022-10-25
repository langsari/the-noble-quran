# Overview :
Quran is the way of life, every musllim should study and learn how to read, meaning of Al quran and practice it.
There are 114 Surahs in the Quran. Each surah has a different name and will talk about everything from etiquette, heritage, medicine, and the cosmic system. Muslims believed and instilled in them from a young age that the Quran is holy. and Muslims honor it.


# Problem Statement :
As I mentioned above, for The Quran website, The website which exists does not completely consist of basic features if compared with website quran.com. For quran.com contains Quran-Text, Tafseerquran, Audio and Search-Button. And the Quran website in Thai is also complicated to make it difficult to use. Also, these websites are outdated and not constantly updated. Thus, it led me to develop THE NOBLE QURAN WEB APPLICATION in the form of a web application and make it functionally. The next chapter provides the related work in this area.


# Objective :
1. To design and develop Quran Web Application.
3. To allow users to use the Quran website easily.
4. To make convenience for users in learning The Quran.


# Software Requirement : 
| Software  | Version   |
|---------  |---------  |
| Laravel   | 8.1      |
| php       | 7.4.19    |
| Laragon   | 5.0.0     |
| Vs code   |1.72.0     |


# Requirement :
Our requirement is user convenience. In case the user wants to study the story of each Quran This time we have added a Qibla slot as well so that users can search and learn from the information we have put in. If users want to know or study the story of the Quran, they can learn from various topics. contained in the Quran.

# Constraints :
The limitation of the function we do is Users can learn the topics of the Quran that we have preliminarily on our website. At this time, not all topics in the Quran may be covered. In the future, we may develop more topics. to cover as much as possible.


# Source Code :
Route
// kiblat
 @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('กิบลัต') }}</a>
                                </li>
                            @endif
                            
<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><?php echo e(__('กิบลัต')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                        <img src="{{ URL::to('img/kiblat.PNG') }}">
      <br><br>
      <h2 class="text-capitalize lead"></h2>
      <div class="col-md-3"></div>
    </div>
