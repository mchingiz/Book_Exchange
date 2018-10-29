APA Servis - GIT Docs
===============================
--------------------

# Başlamadan öncə bunları bilməyiniz vacibdir
- Git nədir, nə üçün istifadə olunur
- Təməl funksionallıqlar - commit, pull, push, merge və s.
- Gitdə branching

# Workflow

Bütün layihələr iki daimi branchdən ibarətdir:
- `master` - Productionda olan branch. Bu branchdə konflikt QƏTİYYƏN yaranmamalıdır. Konfliktlər YALNIZ digər branchlərdə həll olunduqdan sonra masterə merge olunmalıdır.
- `dev` -  Testing branchidir.

## 1ci addım
Hər yeni task üçün `dev` branchindən yeni branch yaradılmalıdır(nümunə: `slider`).

    --- Versiya 1(qısa yol) ---
    git checkout -b slider  // slider adlı branch yoxdursa yaradır, sonra keçir

    --- Versiya 2(uzun yol) ---
    git branch slider  // slider adlı branch yaradır
    git checkout slider  // həmin branchə keçir

## 2ci addım
Yaradılan yeni branchdə iş bitdikdən sonra həmin branchi githuba push edirik. Əks halda bu branch githubda görünməyəcək. Yalnız bizim localımızda mövcud olacaq.

    git push origin slider

## 3cü addım
Daha sonra həmin branchi `dev`ə merge etməliyik. Amma ola bilər ki, biz `slider`də işləyən vaxt başqa biri `dev`ə başqa branchi merge edib. Ona görə əvvəla `dev`ə qayıdıb, githubdakı yenilikləri pull eləyirik.

    git checkout dev
    git pull origin dev

## 4cü addım
Sonra öz branchimizə qayıdırıq və `dev`i o branchə merge edirik. Bu mərhələdə məqsədimiz `dev`də yeni götürdüyümüz və `slider`də öz yazdığımız kodların konfliktlərini həll etməkdi. Aşağıdakı commandləri icra edəndən sonra, konflikt yarana bilər, hansı ki tamamilə normaldı.

    git checkout slider
    git merge dev

## 5ci addım
Konfliktləri həll etdikdən sonra, bütün dəyişiklikləri staging area-ya add edib, sonra isə commit edirik

    git add -A
    git commit -m "slider to dev - konfliktler hell olundu"

    // Her ikisi eyni isi gorur

Ehtimal var ki, biz bu konfliktləri həll edərkən, kimsə yenidən `dev`ə yeni branch merge edib. Ona görə konfliktləri həll edəndən sonra yenidən 3cü addımı təkrar edirik. Əgər 'already up-to-date' yazılırsa, deməli remote `dev`də(githubdakı `dev`) yenilik yoxdur və 6cı addıma keçə bilərik. Əgər dəyişikliklər varsa, 4cü addımdan davam edirik.

## 6cı addım

Artıq `dev` branchiylə `slider` branchinin bir-birilə konflikt yaratmadığına əmin olduq deyə `slider`i `dev`ə merge edə bilərik

    git checkout dev
    git merge slider

## 7ci addım
Branchimizi `dev`ə merge edəndən sonra, funksionallığı `dev` branchində də test edirik. Əgər test uğurlu olarsa artıq remote-a(github) push edə bilərik. Amma ondan öncə yenidən remote-dan pull edirik ki, yarana biləcək konfliktləri localda həll edək. Konfliktləri həll etdikdən sonra, yenidən commit edib, remote-a push edirik.

    git pull origin dev

    // Əgər konflikt yaranarsa həll edirik və sonra ...
    git add .
    git commit -m "solved conflicts on local dev"
    git push origin dev

# DİQQƏT EDİLMƏLİ DETALLAR
- Yeni branch yaradarkən hansı branchdə olduğunuzu `git branch` ilə yoxlayın
- Nəyi nəyə merge etdiyinizə fikir verin :D
Viewport
Window
×
×
×
