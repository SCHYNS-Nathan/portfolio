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


## Quelques tests

Voici un test effectué sur GTMetrix :

![Test GTMetrix: Grade B | Performances 84% | Structure 93% | Largest contentful paint 1.3s | Total blockin time 0ms | Cumulative layout shift 0.4](https://user-images.githubusercontent.com/90833102/173080786-37a219e0-1867-4bfe-83c4-c4a2aa245be5.png)


Et voici deux tests effectués sur le Lighthouse de Google (respectivement, la version desktop et la version mobile) :

![Test Google Lighthouse: Performance 89 | Accessibility 89 | Best practices 92 | SEO 91](https://user-images.githubusercontent.com/90833102/173081059-5d16e8e2-21e1-4efd-982d-175e0ad28e33.png)

![Test Google Lighthouse: Performance 94 | Accessibility 89 | Best practices 83 | SEO 92](https://user-images.githubusercontent.com/90833102/173081456-a011b5a5-7852-4b8b-b0a4-6f53a1da9c5a.png)

