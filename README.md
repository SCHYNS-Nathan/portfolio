# DESIGN WEB - Création d'un portfolio sous Wordpress

Dans le cadre du cours de design web, il nous a été demandé de créer un portfolio regroupant les travaux que l'on voulait mettre en valeur. Cette page devait être réalisée sous Worpress et il y avait plusieurs éléments qui devaient être présent dans la page. (formulaire de contact, page d'archive regroupant tous les projets, ...)





## Le design

Je vais d'abords commencer par parler du design et de la maquette de ce site web.

Ma première inspiration était de créer une page dont l'apparence se base sur des affiches d'illustration contemporaine. Mes premier croquis et maquettes reflètent donc cet aspect graphique.

J'ai ensuite essayer d'amener un aspect plus ludique à la page en rajoutant une sorte de petit menu sous forme de question-réponse. Cependant, la navigation devenait trop confuse et les visiteurs n'étaient pas encouragés à visiter l'entièreté du site.

Grâce aux retours de madame Wera, j'ai donc cherché un nouveau concept de navigation afin d'encourager les visisteurs à explorer d'avantage le site.

Ma première idée était d'ajouter un fil rouge à suivre tout au long de la page comme sur ce site : https://atlus.com/p5r/index.html J'ai cependant assez vite abandonné cette approche car le rendu n'était pas très engageant et le concept pas si fort que ça.

Je me suis alors tourné vers un site dont l'on nous avait parlé plus tôt dans l'année, Garden Studio : https://gardenestudio.com.br/en#o-estudio J'ai beaucoup aimé le concept de navigation et l'aspect "exploration" d'un paysage du site. Je suis donc parti sur un concept de navigation similaire tout en y ajoutant ma patte graphique.

Si vous souhaitez observer ces maquettes, je vous invite à suivre ce lien :
https://www.figma.com/file/hfdnFHIJq8vCC6oaiQ3ZHM/Portfolio?node-id=0%3A1





## La réalisation

### HTML et Wordpress

Étant l'un des premiers sites que j'ai développer sous Wordpress, ce portfolio m'a apporté son lot d'apprentissage et de problèmes à régler !

Je n'ai pas véritablement eu de problème avec la partie HTML, mais les ajouts de PHP via Wordpress m'ont parfois causé quelques problèmes. C'est par exemple le cas de certaines images qui ne voulaient pas se redimmensionner à la bonne taille car il fallait ajouter des paramètres en plus, l'extension de formulaire que j'utilise (Contact Form 7) à lui aussi poser plusieurs problèmes et à l'heure ou j'écris ces lignes, je n'arrive toujours pas à récupérer les emails comme je le voudrais, ...

J'ai néanmoins réussi à créer le système de navigation et une page d'achive via un template. J'ai aussi réussi à générer les projets et le contenu comme il fallait.


### CSS

Le CSS ne m'a pas vraiment posé de problèmes même s'il n'est pas tout à fait terminé. En effet, à cause d'un manque de temps, je n'ai pas pu convertir les unités -px en -em. Magré cela, je suis plutôt satisfait du résultat !


### JS

Comme pour le CSS, le Javascript ne m'a posé de problèmes mais il n'est pas aussi complet que je le voudrais. Je voulais effectivement ajouter des sortes de petites bulles qui remontaient dans le canvas de la section présentation. Malheureusement, je n'ai pas eu le temps d'ajouter cette fonctionnalité pour ce jury et je l'ajouterai donc probablement plsu tard.

Mis à part cela, j'ai ajouter plusieurs petites features via JS. L'effet "fade-in on scroll" directement repris de mon projet CV, des champs de formulaire dans la section présentation liés à ceux dans le formulaire de contact et aussi une petite surprise lorsque l'on tente de compléter le formulaire de contact !


### Images

Les images étant différents pour chaques projets, j'ai préféré utiliser la gestion des images via Wordpress. J'ai tout de même utilisés un plugin afin d'optimiser ces images pour qu'elles ne soient pas trop volumineuses.

Aussi, il est bon de noter que toutes les transitions de section, les logos et autres éléments simple ont été réalisé avec du SVG inline !


## Quelques tests

Voici deux tests effectués sur le Lighthouse de Google (respectivement, la version desktop et la version mobile) :

![Test Google Lighthouse: Performance 98 | Accessibility 98 | Best practices 92 | SEO 100](https://user-images.githubusercontent.com/90833102/173095219-feb00b5a-bce8-40da-ac4c-47e6ceb517d0.png)


![Test Google Lighthouse: Performance 85 | Accessibility 98 | Best practices 100 | SEO 100](https://user-images.githubusercontent.com/90833102/173095323-01235065-8732-4a58-b2f9-0432c6c29074.png)


Les résultats sont plutôt bons dans l'ensemble mais la version mobile à quelques problèmes de performances.





## Accessibilité

Au niveau de l'accessibilité, le site est :

- entièrement navigable au clavier ;
- adapté aux différents daltonismes ;
- utilisable sans javascript ;
- adapté à différents supports grâce aux media queries.

D'après les tests d'accessibilités de Firefox, il y a cependant quelques problèmes de contraste dans les sections avec un fond rouge.

