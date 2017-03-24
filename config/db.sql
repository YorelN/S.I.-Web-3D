--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `full_content` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `cours`
--

INSERT INTO `cours` (`id`, `name`, `content`, `mat_id`, `tag_id`, `full_content`) VALUES
(1, 'Les poumons, un cours général', 'Poumons et Plèvres sont situés dans la cavité thoracique. L''orifice supérieur est situé au niveau de la première côté + bord supérieur du thorax.', 1, 5, 'Poumons et Plèvres sont situés dans la cavité thoracique. L''orifice supérieur est situé au niveau de la première côté + bord supérieur du thorax. L''orifice inférieur du thorax est large, fermé par le muscle diaphragme. Cette cavité thoracique est divisée en deux par le médiastin dont l''élément le plus volumineux est le coeur dans le médiastin antérieur. Le médiastin sépare les deux hémithorax droit et gauche où se placent les poumons droit et gauche (pairs). L''apex pulmonaire dépasse le niveau de la première côte et se situe dans le creux sus claviculaire.\r\n\r\nLes poumons droit et gauche ne sont pas symétriques : droit ≈ 700g; gauche ≈ 600g. Chez la femme, en général, la cavité thoracique est moins volumineuse.\r\n\r\nAspect normal : lisse, rosé et de plus en plus grisâtre avec le temps.\r\n\r\nIls présentent chacun trois faces :\r\n\r\nPériphérique : moulée sur le thorax osseux ( face costale )\r\nInterne : face médiastinale moulée sur les éléments du médiastin.\r\nInférieure : face diaphragmatique\r\nLe coeur déborde sur la gauche d''où certaines différences de morphologie.'),
(2, 'L''ambolie pulmonaire, maladie grave', 'Elle seule fournit la certitude du diagnostic. Réalisée dans de bonnes conditions, sa sensibilité et sa spécificité sont de 100 %.', 1, 5, 'MOYENS DIAGNOSTIQUES<br/><br/>\r\n1 - L''angiographie pulmonaire sélective: \r\n<br/><br/>\r\nElle seule fournit la certitude du diagnostic. Réalisée dans de bonnes conditions, sa sensibilité et sa spécificité sont de 100 %.Elle n''est pas dénuée de danger particulièrement en cas d''hypertension artérielle pulmonaire. Elle nécessite un cathétérisme sélectif du tronc de l''artère pulmonaire éventuellement supra-sélectif de ses branches. Elle permet de recueillir les éléments suivants :\r\n<br/><br/>\r\n1.1 - La pression artérielle pulmonaire.\r\n<br/><br/>\r\nL''hypertension artérielle pulmonaire de type précapillaire est constante pour les obstructions supérieures à 30 % du lit vasculaire pulmonaire. La pression capillaire est normale. Des chiffres de pression normaux n''excluent pas le diagnostic. Pour mémoire, le débit cardiaque est normal. Une chute ne s''observe que dans les embolies pulmonaires graves.\r\n<br/><br/>\r\n1.2 - Les signes directs du thrombus sous forme d''images claires intraluminales complètement ou incomplètement occlusives    .\r\n<br/><br/>\r\n1.3 - Les signes indirects d''embolie pulmonaire sous forme d''hypo-vascularisation en aval des thrombi.\r\n<br/><br/>\r\n1.4 - Elle permet enfin de chiffrer la sévérité de l''embolie pulmonaire en tenant compte de la topographie et de la diffusion des thrombus dans les artères pulmonaires et du retentissement sur la vascularisation capillaire. C''est l''indice de MILLER .\r\n<br/><br/>\r\n1.5 - Une amputation supérieure à 50 % du lit vasculaire constitue un signe de gravité quelque soit le tableau clinique et le retentissement sur l''hématose.\r\n<br/><br/>\r\n2 - Angiographie pulmonaire numérisée. \r\nLes renseignements procurés par cet examen, sa sensibilité, sa spécificité sont voisines de ceux de l''angiographie pulmonaire sélective. Toutefois, les embols de petite taille sont de diagnostic plus difficiles du fait de la résolution limitée de l''image et des problèmes de soustraction. Elle est de réalisation difficile voire impossible chez les sujets très dyspnéiques .\r\n<br/><br/>\r\n3 - Scintigraphie pulmonaire de perfusion \r\nExamen non invasif sans danger, la scintigraphie est rarement disponible en urgence. Ses résultats doivent être confrontés à ceux du cliché de thorax et si possible de la scintigraphie de ventilation :\r\n<br/><br/>\r\n3.1 - Le défaut de perfusion sans anomalie de ventilation ou sans anomalie parenchymateuse est le signe caractéristique de l''embolie pulmonaire. Le diagnostic est d''autant plus probable que le déficit perfusionnel est plus étendu plutôt lobaire que segmentaire. Son caractère régressif à deux examens itératifs est un argument supplémentaire en faveur du diagnostic. Cet aspect dit de haute probabilité n''est observé que dans 15% des cas      .\r\n<br/><br/>\r\n3.2 - A l''inverse, un défaut de perfusion avec défaut de ventilation ou anomalie parenchymateuse dans le même territoire n''a pas de valeur sémiologique. Il n''affirme ni n''élimine l''embolie pulmonaire. Cet aspect peut se rencontrer dans l''embolie pulmonaire mais aussi dans toute pathologie pleurale ou parenchymateuse sans embolie pulmonaire. Il s''observe dans 70% des cas.'),
(3, 'Introduction à la psychologie', 'Une introduction à la psychologie présentée par des médecins spécialistes', 1, 2, 'Elle seule fournit la certitude du diagnostic. Réalisée dans de bonnes conditions, sa sensibilité et sa spécificité sont de 100 %.\r\n\r\nElle seule fournit la certitude du diagnostic. Réalisée dans de bonnes conditions, sa sensibilité et sa spécificité sont de 100 %.\r\n\r\n\r\n\r\nElle seule fournit la certitude du diagnostic. Réalisée dans de bonnes conditions, sa sensibilité et sa spécificité sont de 100 %.'),
(4, 'La psychologie avancée', 'Ici seront révélés tous les secrets de la psychologie', 2, 2, 'Ici tous les cours de médecine de l''externat de la 4eme année de Cardiologie. Collectés et organisés par un ancien externe de la faculté de Constantine. Les cours sont selon le programme Algérien appliqué dans la faculté de Médecine de Constantine et par extension : les facultés des pays francophones y compris les facultés de médecine Algérienne et Françaises. L’actualité scientifique abordée dans ces cours de cardiologie est celle entre 2001 et 2004. Veuillez excuser d''éventuelles erreurs du contenu.\r\nVous trouverai en bas de l''article un lien vers le fichier PDF des cours de cardiologie, plus organisé, et plus lisible que vous pouvez imprimer.\r\n\r\nIci tous les cours de médecine de l''externat de la 4eme année de Cardiologie. Collectés et organisés par un ancien externe de la faculté de Constantine. Les cours sont selon le programme Algérien appliqué dans la faculté de Médecine de Constantine et par extension : les facultés des pays francophones y compris les facultés de médecine Algérienne et Françaises. L’actualité scientifique abordée dans ces cours de cardiologie est celle entre 2001 et 2004. Veuillez excuser d''éventuelles erreurs du contenu.\r\nVous trouverai en bas de l''article un lien vers le fichier PDF des cours de cardiologie, plus organisé, et plus lisible que vous pouvez imprimer.'),
(5, 'Le système nerveux', 'L’atteinte du système nerveux périphérique est définie par l’ensemble des manifestations cliniques.', 1, 3, 'L’atteinte du système nerveux périphérique est définie par l’ensemble des manifestations cliniques,\r\nélectriques, biologiques et histologiques résultant d’une atteinte du neurone périphérique.\r\nLe système nerveux périphérique est composé :\r\n\r\n– defibres motrices efférentes : le corps cellulaire est situé dans la corne antérieure de la moelle\r\népinière ; l’axone quitte la moelle par la racine antérieure et chemine jusqu’au muscle strié\r\nsquelettique où il tient sous sa dépendance une centaine de fibres (unité motrice) ;\r\n\r\n– de fibres sensitives afférentes : le corps cellulaire est situé dans le ganglion rachidien de la racine\r\npostérieure ; leur destinée médullaire les oppose en deux groupes : lemniscales dont les fibres\r\ncheminent dans les cordons postérieurs homolatéraux et véhiculent la sensibilité épicritique et le\r\nsens proprioceptif, et spinothalamiques dont les fibres, qui décussent au niveau du métamère\r\nmédullaire, véhiculent de façon controlatérale le tact grossier et la thermoalgie;\r\n\r\n– de fibres végétatives (voies efférentes sympathiques et parasympathiques) :le corps cellulaire du neurone préganglionnaire est situé dans le tronc cérébral ou la moelle, l’axone quitte le système\r\nnerveux central par le trajet des nerfs crâniens (III, VII, IX, X) ou des racines antérieures médullaires pour faire un relais avec le neurone postganglionnaire innervant muscles lisses et glandes.\r\n\r\nLes fibres nerveuses sont constituées d’axones (cellules nerveuses), de cellules de Schwann\r\n(myéline) et de tissus de soutien (vaisseaux et conjonctif). Les lésions élémentaires des fibres\r\nnerveuses sont :\r\n– la dégénérescence wallérienne : désintégration progressive myélino-axonale puis bouquets de\r\nrégénérescence axonale (clusters) ;\r\n– la démyélinisation segmentaire : mise à nu progressive des axones par destruction de la myéline\r\nau niveau des nœuds de Ranvier qui s’élargissent anormalement.\r\nLes lésions s’organisent en atteintes primitives des fibres nerveuses (axone ou myéline),\r\nneuropathies interstitielles et des structures conjonctivovasculaires, neuropathies vasculaires. '),
(6, 'Diagnostic Nerveux', 'Le diagnostic repose sur l’association plus ou moins complète de trois ordres de signes.', 1, 3, 'A. Clinique\r\n<br/><br/>\r\nLe diagnostic repose sur l’association plus ou moins complète de trois ordres de signes.\r\n<br/><br/>\r\n1. Signes moteurs\r\n<br/><br/>\r\n<br/><br/>\r\nIls associent :\r\n<br/><br/>\r\n– une paralysie ou parésie, par atteinte de la motricité volontaire, réflexe et automatique par souffrance\r\nde la voie finale commune (motoneurone alpha) ; plus ou moins précédée d’une fatigabilité, elle est\r\ncomplète (car affectant tous les types de motricité), flasque et hypotonique ; elle est cotée de 0 à 5 (testing\r\nmusculaire, cf. p. 257) : 0 = pas de contraction ; 1 = contraction faible sans déplacement ; 2\r\n= déplacement faible si pesanteur éliminée ; 3 = déplacement possible contre pesanteur ; 4 = déplacement\r\npossible contre résistance ; 5 = force normale ; la réponse idiomusculaire est conservée ;\r\n<br/><br/>\r\n– une amyotrophie retardée de 3 semaines par rapport à la lésion nerveuse ;\r\n– des fasciculations(spontanées ou provoquées par la percussion ou l’exposition au froid) ;\r\ntraduisant l’activité spontanée d’une unité motrice, elles sont en faveur d’une lésion proche de la\r\ncorne antérieure (motoneurone, racine);\r\n<br/><br/>\r\n– une diminution ou une abolition des réflexes ostéotendineux.\r\n\r\n<br/><br/>\r\n<br/><br/>\r\n2. Signes sensitifs\r\nIls sont souvent les premiers à apparaître.\r\n<br/><br/>\r\na. Signes subjectifs\r\nCes sensations anormales sont des paresthésies (picotements, fourmillements, engourdissements\r\nspontanés), des dysesthésies (déclenchées par le tact) ou des douleurs (brûlures, décharges\r\nélectriques, striction). Leur origine peut être radiculaire ou tronculaire. La douleur radiculaire a un trajet traçant le long d’un membre. Elle est accrue ou provoquée par les manœuvres élevant la pression du LCS (toux, éternuement) et celles étirant la racine (Lasègue, mouvements du cou).\r\n<br/><br/>\r\nLes signes objectifs sont en revanche absents ou discrets. La topographie est fixe et parfaitement\r\ndéterminée.\r\n<br/><br/>\r\nb. Atteinte objective rarement dissociée\r\nLes troubles concernent les sensibilités superficielle (au tact [épicritique], à la température et à la\r\npiqûre [thermoalgique]) et proprioceptive (altération du sens vibratoire, du sens de position des\r\nsegments de membre, avec signe de Romberg).'),
(7, 'Cours de pharma 1', 'Les matières premières susceptibles d’être à l’origine d’un médicament, sont des drogues (à noter au passage que la traduction de l’anglais « drug » est « médicament » et jamais « drogue »).', 1, 4, '2.1. Principe actif\r\n<br/><br/>\r\n2.1.1. Origine\r\n<br/><br/>\r\nLes matières premières susceptibles d’être à l’origine d’un médicament, sont des drogues (à noter au passage que la traduction de l’anglais « drug » est « médicament » et jamais « drogue »).\r\n<br/><br/>\r\nCe terme est surtout usité pour les produits traditionnels issus des règnes minéraux, végétaux\r\nou animaux. Ces médicaments restent très employés, notamment ceux qui proviennent des plantes qui continuent à fournir des nouvelles substances.\r\n<br/><br/>\r\nLa plupart des principes actifs actuels sont cependant préparés par synthèse chimique intégrale ou par semi synthèse à partir de substances naturelles.\r\nLes biotechnologies (fermentations, génie génétique) permettent l’accès à des molécules complexes fabriquées par le vivant.\r\n<br/><br/>\r\n2.1.2. Forme\r\n<br/><br/>\r\nAvant d’être intégré dans un médicament tel qu’il se présente dans une pharmacie, un principe\r\nactif doit être obtenu sous une forme standardisée, reproductible d’un lot de fabrication à l’autre et aussi pure que possible. Les normes auxquelles ils doivent satisfaire sont fixées par la pharmacopée (recueil officiel de normes pharmaceutiques) ou précisées dans le dossier préalable à leur autorisation d’utilisation.'),
(8, 'Notions de pharmacogénétique', 'La pharmacogénétique étudie la variabilité génétique dans la réponse aux médicaments.', 1, 4, 'La pharmacogénétique étudie la variabilité génétique dans la réponse aux médicaments.\r\n<br/><br/>\r\nElle analyse le statut génétique et permet d’établir le lien entre le polymorphisme génétique et la variabilité de la réponse à l’effet d’un médicament. \r\n<br/><br/>\r\nCette variabilité interindividuelle d’origine génétique peut être\r\nd’ordre pharmacocinétique : variation d’expression des gènes codant pour des enzymes impliquées dans le métabolisme des médicaments, ou d’ordre pharmacodynamique : variation d’expression de\r\ngènes codant pour des récepteurs.\r\nLe polymorphisme d’une séquence d’ADN chromosomique se définit comme une modification de\r\nséquence observée chez plus de 1 % de la population.\r\n<br/><br/>\r\nL’expression du génotype est appelée phénotype.\r\n<br/><br/>\r\nL’objectif à long terme de la pharmacogénétique est de mettre à disposition des cliniciens des tests de\r\ndépistage du polymorphisme génétique, réalisables en routine, permettant de prédire la réponse à un\r\nmédicament et de cerner le risque de survenue d’effets indésirables. Les conséquences cliniques des\r\nmutations génétiques restent encore à élucider dans certains cas.\r\n<br/><br/>\r\nL’objectif de la pharmacogénétique est de pouvoir adapter la thérapeutique (quel médicament et à\r\nquelle posologie) en fonction du statut génétique de l’individu.\r\n<br/><br/>\r\n2. Techniques d’étude\r\n<br/><br/>\r\nGénotypage : recherche de mutation, délétion sur prélèvement sanguin par des techniques de biologie moléculaire (PCR avec hybridation d’oligonucléotides, DNA on a chip, microarray..). Il n’y a pas toujours de corrélation démontrée entre la présence de mutation ou délétion et une différence d’activité de l’enzyme.\r\n<br/><br/>\r\nPhénotypage : mesure de l’activité enzymatique in vitro (ex. mesure de l’activité de la TPMT (thiopurine méthyltransférase) de globules rouges voir ci après) ou in vivo par l’administration d’une dose test (ex. débrisoquine pour phénotypage de CYP2D6, …)\r\n<br/><br/>\r\nIdentification d’un métaboliseur inhabituel : le tableau ci-dessous rassemble les données collectées\r\ndans le cadre du suivi du métabolisme de la débrisoquine chez quatre volontaires sains.\r\n<br/><br/>\r\n Il apparaît clairement que le sujet 4 ne métabolise pas cette substance de la même manière que les trois autres.\r\n<br/><br/>\r\nCe type d’étude, couramment réalisé au cours du développement d’un nouveau médicament, permet de repérer des métabolismes particuliers et d’en entreprendre l’exploration. '),
(9, 'La commissurotomie à coeur ouvert', 'Dans les mauvaises formes anatomiques avec un important remaniement de l’appareil sous-valvulaire.', 1, 1, 'La commissurotomie à cœur ouvert, sous le contrôle de la vue, garde ses indications :\r\n<br/><br/>\r\nDans les mauvaises formes anatomiques avec un important remaniement de l’appareil sous-valvulaire. En effet, la commissurotomie à cœur ouvert a l’avantage de fendre les cordages fusionnés.\r\n<br/><br/>\r\nEn cas d’association au RM, d’une fuite mitrale significative, orientant vers un traitement conservateur commissurotomie-plastie.\r\n<br/><br/>\r\nEn cas d’un RM associé à une valvulopathie aortique sévère devant bénéficier d’un remplacement valvulaire aortique ou associé à une coronaropathie devant bénéficier d’un pontage ou associé à une insuffisance tricuspide volumineuse qui est un marqueur d’un\r\nmauvais résultat à long terme et doit être corrigée en même temps que la valve mitrale.\r\n<br/><br/>\r\nEnfin, en cas d’une thrombose de l’OG ne disparaissant pas sous anticoagulants (une thrombectomie auriculaire gauche est associée au geste chirurgical). \r\n<br/><br/>'),
(10, 'L''évaluation fonctionnelle de la surdité', 'Les techniques d’audiométrie comportementale précoces peuvent être utilisées pour évaluer la surdité.', 1, 9, 'Les techniques d’audiométrie comportementale précoces peuvent être utilisées, en\r\ngénéral à partir de l’âge de trois mois (dès que le développement psychomoteur de l’enfant lui permet de tenir sa tête). Les tests sont réalisés au casque et au vibrateur pour obtenir des niveaux de seuil en conduction aérienne et en conduction osseuse, sur\r\nl’ensemble des fréquences.\r\n<br/><br/>\r\nLes techniques de conditionnement et le matériel sonore\r\nutilisé est choisi en fonction de l’âge. Ces données sont indispensables pour poser les\r\nindications et la prise d’un appareillage prothétique qui doit pouvoir être réalisé au mieux\r\nà partir de l’âge de 6 mois, âge optimal actuel du diagnostic des surdités congénitales.\r\n<br/><br/>\r\nLes autres techniques : test des Otoémissions acoustiques ou Potentiels évoqués auditifs précoces automatisés, représentent des techniques de dépistage néo natal de la surdité en maternité.\r\n<br/><br/>\r\n Les potentiels évoqués auditifs du tronc cérébral sont aussi utiles pour donner une première approche du seuil auditif sur les fréquences aiguës.\r\n<br/><br/>\r\nL’impédancemétrie est utilisée pour l’approche diagnostique des atteintes de l’oreille moyenne.\r\n<br/><br/>\r\nAu-delà du dépistage néonatal des surdités, il est recommandé que soit réalisé systématiquement un dépistage des surdités de l’enfant à l’âge de 4 mois, 9 mois, 2 ans et 4 ans. \r\n<br/><br/>\r\nCe dépistage fait intervenir la notion de facteurs de risque, prend en compte l’entretien avec les parents, les tests de stimulation vocale et l’acoumétrie aux jouets sonores.\r\n<br/><br/>\r\nToute suspicion doit faire réaliser un test d’audiométrie comportemental adapté à l’âge (comme précédemment décrit), par une équipe spécialisée. \r\n<br/><br/>'),
(11, 'Le coeur et ses vaisseaux', 'Le sang veineux revient de l''organisme par l''intermédiaire de deux veines : les veines caves : VCI, VCS.', 1, 6, 'Le sang veineux revient de l''organisme par l''intermédiaire de deux veines : les veines caves : VCI, VCS.\r\n<br/><br/>\r\nLe sang arrive dans l''oreillette droite, puis il passe dans le ventricule droit par l''orifice auriculo-ventriculaire droit.\r\n<br/><br/>\r\n De là, il gagne les poumons par l''intermédiaire des artères pulmonaires - tronc pulmonaire pour les intimes\r\n<br/><br/>\r\n - Au niveau du poumon, le sang est purifié (c''est à dire enrichi en O2) et il repart par deux veines pulmonaires (2 par poumon) et retourne dans le coeur, au niveau de l''oreillette gauche (= l''atrium gauche).\r\n<br/><br/>\r\n Puis, le sang passe dans le ventricule gauche d''où il sortira via l''Aorte qui, dans sa partie initiale, dessine une crosse.\r\n<br/><br/>\r\n De la portion horizontale naîtront les trois troncs supra-aortiques :\r\n<br/><br/>\r\ntronc artériel brachiocéphalique qui se divise à la partie haute du thorax en deux artères, l''artère carotide primitive droite qui monte verticalement, et l''artère subclavière droite qui change de direction, devient horizontale et donne des collatérales.\r\n<br/><br/>\r\nl''artère carotide primitive gauche, qui monte verticalement et se dispose sur le flanc gauche de l''axe viscéral du cou\r\nl''artère subclavière gauche symétrique de la droite.\r\n<br/><br/>\r\nDe la partie toute initiale de l''Aorte (= le bulbe aortique) naissent les artères coronaires.\r\n<br/><br/>\r\nL''épaisseur du myocarde est plus grande à gauche qu''à droite.'),
(12, 'Représentation du coeur humain', 'Le bord droit du coeur est représenté en haut par l''orifice d''abouchement de la VCS dans la partie supérieure de l''atrium droit.', 1, 6, 'Le bord droit du coeur est représenté en haut par l''orifice d''abouchement de la VCS dans la partie supérieure de l''atrium droit. En dessous, le bord droit est convexe vers la droite, constituant la limite latérale de l''atrium droit.\r\n<br/><br/>\r\nEn dessous, le bord droite est convexe vers la droite, constituant la limite latérale de l''atrium droit qui se prolongera en bas par l''orifice d''abouchement de la VCI. (Celui-ci est légèrement + important et + volumineux que celui de la VCS).\r\n<br/><br/>\r\nL''atrium droit se prolonge vers la gauche par l''auricule droit qui prolonge l''oreillette droite et qui masque l''origine de l''Aorte. L'' Aorte naît de l''apex sur le flanc gauche de la VCS. Elle dessine une crosse concave vers le bas.\r\n<br/><br/>\r\n Sa direction est oblique de droite à gauche d''avant en arrière (du médiastin antérieur vers le médiastin postérieur). L''auricule droit se prolonge vers le bas par un sillon qui sépare l''oreillette droite du ventricule droit.\r\n<br/><br/>\r\nDu sommet du ventricule droit sort un tronc d''artère très court, qui se divise très vite en deux : les artères pulmonaires. Cette bifurcation se fait sous la crosse de l''Aorte. Entre les 2, il existe un vestige embryonnaire : le ligament artériel, tendu de la partie supérieure de la bifurcation des artères pulmonaires à la face inférieure de la crosse.\r\n<br/><br/>\r\nLe ventricule droit représente l''essentiel de la face sterno-costale. Il est limité à gauche par un sillon inter ventriculaire antérieur qui le sépare du ventricule gauche.\r\n<br/><br/>\r\nLe ventricule gauche présente sur cette face sterno-costale une expansion qui recouvre la partie haute du ventricule gauche : l''auricule gauche.\r\n<br/><br/>\r\nLa pointe du coeur est représentée essentiellement et uniquement par le ventricule gauche.\r\n<br/><br/>\r\nDans le médiastin postérieur, l''Aorte se dispose sur le flanc gauche du corps vertébral.\r\n<br/><br/>\r\nL''auricule gauche est une évagination de l''atrium gauche.\r\n<br/><br/>\r\nLe flanc gauche de la VCS est masqué par l''auricule droit. L''origine de l''Aorte se dispose en arrière de l''auricule droit. Le sillon inter ventriculaire sépare les ventricules droit et gauche.'),
(13, 'Effets de la glucuronamide', 'Cet acide glucuronique aurait des propriétés détoxifiantes, mais cette propriété reste encore à démontrer.', 1, 7, 'On retrouve le glucuronamide associé à la vitamine C et à la caféine dans le Guronsan, le Sarvit et le GCForm. \r\n<br/><br/>\r\nCes trois médicaments, vendus sans ordonnance en France, sont proposés dans le traitement d''appoint de la fatigue. \r\n<br/><br/>\r\nLa Détoxalgine, qui en contenait également, associé cette fois à la vitamine C et à l''acide acétylsalicylique, n''est plus commercialisée depuis 2006.\r\n<br/><br/>\r\nIl semble constituer un élément possible de traitement contre le VIH3.\r\n<br/><br/>\r\nCet acide glucuronique aurait des propriétés détoxifiantes, mais cette propriété reste encore à démontrer.\r\n<br/><br/>\r\nIl est également impliqué dans la clairance hépatique, en particulier dans la glucuronoconjugaison qui permet l''excrétion rénale de certaines substances.'),
(14, 'Généralités sur les médiaments', 'la substance administrée n’est pas active mais subit une modification dans l’organisme', 1, 7, 'ó Prodrogues:\r\n<br/><br/>\r\nla substance administrée n’est pas active mais subit une modification dans l’organisme permettant de libérer la molécule active (exp: certaines chimiothérapies par voie\r\norale, certains antiviraux).\r\n<br/><br/>\r\nó Médicaments dérivés du sang (MDS):\r\nProduits stables préparés à partir du sang humain (immunoglobulines, albumine, facteurs de coagulation…)\r\n<br/><br/>\r\nó Désinfectants à usage humains\r\nó Substituts nicotiniques'),
(15, 'Cours général, l''épaule', 'L''épaule est une articulation complexe qui met en jeu en fait deux articulations : la sacapulo-thoracique et la gléno-humérale.', 1, 10, 'L’épaule est une articulation complexe qui met en jeu en fait deux articulations : la sacapulo-thoracique et la gléno-humérale.\r\n<br/><br/>\r\nLa sacapulo-thoracique articule l’omoplate et la cage thoracique. Il s’agit d’une articulation serrée qui fait pivoter l’omoplate selon un arc de cercle dans le plan frontal et sert à amorcer l’écarté du bras (abduction) ; le grill costal et l’omoplate sont intriqués et fixés par des muscles puissants.\r\n<br/><br/>\r\nLa gléno-humérale met en jeu l’extrémité supérieure de l’humérus par l’intermédiaire de la tête humérale qui est sphérique et l’omoplate par l’intermédiaire de la glène qui est creuse concave.\r\n<br/><br/>\r\nLa glène est agrandie comme le cotyle par un bourrelet glénoîdien qui est à la périphérie.\r\n<br/><br/>\r\nComme pour toute articulation, les surfaces osseuses sont recouvertes de cartilage articulaire et des ligaments relient les extrêmités .\r\n<br/><br/>\r\nLes muscles sont très nombreux dans l’épaule :\r\n<br/><br/>\r\nLes muscles rotateurs de l’épaule partent de l’omoplate et s’insèrent sur l’extrémité supérieure de l’humérus appelée trochiter. Les rotateurs externes et starters de l’abduction sont :\r\n<br/><br/>\r\n- le sus-épineux qui s’insert à la partie postérieure de l’omoplate au-dessus d’un renflement appelé épine de l’omoplate ;\r\n<br/><br/>\r\n- le sous-épineux qui s’insert sous l’épine de l’omoplate ;\r\n<br/><br/>\r\n- le petit rond qui est juste sous le sous-épineux.\r\n<br/><br/>\r\nLe muscle qui assure la rotation interne de l’épaule s’appelle le sous-scapulaire.\r\n<br/><br/>\r\nUn tendon appelé long biceps part du sommet de la glène et se dirige vers le bras dans une tranchée naturelle de la partie antérieure de l’extrémité de l’humérus, la gouttière bicipitale.\r\n<br/><br/>\r\nTous ces muscles rotateurs sont prolongés par des tendons applatis recouvrant complètement la tête de l’humérus et formant la coiffe des rotateurs très importante dans la pathologie de l’épaule.\r\n<br/><br/>\r\nL’omoplate est prolongé en externe par une expansion appelée acromion qui se situe juste au- dessus de la coiffe des rotateurs.\r\n<br/><br/>\r\nCette coiffe glisse sous l’acromion par l’intermédiaire d’une poche synoviale appelée bourse séreuse sous-acromio-deltoïdienne.\r\n<br/><br/>\r\nAu dessus de cette articulation, le muscle principal abducteur est le deltoïde.\r\n<br/><br/>\r\nCe muscle très puissant chapote l’épaule en partant de l’acromion et en s’insérant sur la face externe de l’humérus, le V deltoïdien. Il permet l’abduction complète de l’épaule.\r\n'),
(16, 'Sémiologie de l''épaule', 'Les mouvements doivent être impérativement être examinés en actif et en passif : en effet dans certaines lésions tendineuses la mobilité passive est seule possible.\r\n', 1, 10, 'Les mouvements doivent être impérativement être examinés en actif et en passif : en effet dans certaines lésions tendineuses la mobilité passive est seule possible.\r\nL''épaule comporte en fait 2 articulations : l’articulation omo-thoracique qui est un plan de glissement entre l’omoplate et le gril costal  et l’articulation gléno-humérale : seule la seconde doit être examinée : il faut donc bloquer, par une main sur l’omoplate et la clavicule, l’articulation omo thoracique. \r\nTrois mouvements doivent être étudiés : l’abduction ( 90°), la rotation externe (60°), la rotation interne que l’on juge indirectement par la position de la main dans le dos ( normalement en regard de T7).\r\n		\r\nManœuvres particulières\r\nDeux manœuvres tendineuses doivent être connues : le Palm-Test : flexion contrariée de l’avant-bras, qui peut réveiller une douleur du tendon du long biceps, le Test de Jobe, pour le supra-épineux, qui consiste à positionner l’épaule à 80 ° d’abduction, le coude tendu, la main en pronation et à demander au malade de résister contre un pression de bas en haut appliquée sur le bras.\r\n\r\nEnfin un conflit acromio-huméral (sensation de frottement ) peut être perçu, par la main de l’examinateur sur le moignon de l’épaule, le malade réalisant une élévation de l’épaule en cas de lésions importantes de la coiffe des rotateurs. Le test de Jocum consiste a demander au malade de mettre son bras en abduction, de fléchir le coude, de mettre la main sur l’épaule opposée. L’examinateur applique une pression de haut en bas sur le bras. Le malade ne peut résister à cette pression en cas de lésion de la coiffe.\r\nCet examen clinique simple permet d’élucider plus de 90% de la pathologie d’épaule.\r\n'),
(17, 'L''arthrose, un problème récurrent pour les articulations', 'L’étude des articulations est l’arthrologie (syndesmologie), elle comprend l’étude des moyens d’union des os entre-eux.', 1, 11, 'L’étude des articulations est l’arthrologie (syndesmologie), elle comprend l’étude des moyens d’union des os entre-eux. Une articulation est la réunion de deux élements du squelette; anatomiquement elle comprend les éléments qui unissent deux piéces du squelette.\r\n<br/><br/>\r\nPhysiologiquement elle est l’élément qui permet le mouvement tout en le limitant. En fait ceci est lié car la structure anatomique (la forme de l’articulation et de ses moyens de fixations) conditionne les degrés de liberté. Les articulations permettent notre déplacement dans l’espace, les muscles sont le moteur de ce déplacement l’effet du temps n’est pas négligeable avec la vieillesse usure du cartilage articulaire :  arthrose.\r\n<br/><br/>\r\na) Rappel embryologique :\r\n<br/><br/> \r\nElles dérivent  du mésenchyme, elles apparaisent vers la cinquième semaine. Ce développement de l’articulation va conditionner son anatomie et donc l’amplitude articulaire.\r\n<br/><br/>\r\nEntre deux pièces osseuses présence de tissu conjonctif interposé (inter zone), le développement du tissu conjonctif se fait dans trois directions :\r\n<br/><br/>\r\n- Disparait (crâne, face) impératif de solidité, rigide -> Suture\r\n<br/><br/>\r\n- Persiste en donnant un ligament  inter osseux un disque (colonne vertébrale), solide est mobile.\r\n<br/><br/>\r\n- Persiste en periphérie, disparait au centre donnant  une cavité articulaire, mobile articulation des membres.\r\n <br/><br/>\r\nb) Classification des articulations :\r\n <br/><br/>\r\nSelon la fonction (degré de liberté, anatomie fonctionnelle) ou  l’anatomie ( morphologie des surfaces articulaires) .\r\n<br/><br/>\r\n- Articulations immobiles -> Synarthroses\r\n<br/><br/>\r\n- Articulations mobiles     -> Amphiarthroses, et articulations synoviales.\r\n <br/><br/>\r\nc)  Les synarthroses : divisées en synfibrose et synfibroses\r\n <br/><br/>\r\n- Les synfibroses présentent comme tissu d’interposition du tissu fibreux elles sont situées aux niveaux du neurocrâne ceci permet une adaptation de la structure cranienne à la croissance de l’encéphale sous jacent. Secondairement rôle de protection , de casque.\r\n<br/><br/>\r\n Exemple : hydrocéphalie, anencéphalie, synostose prématurée du crâne, ethnologique.\r\n'),
(18, 'Cours sur l''électrophysiologie', 'L''Electrophysiologie confirme la nature neurogène du trouble. L’examen comporte deux temps distincts.', 1, 3, '1. Électrophysiologie neuromusculaire\r\n(ou électroneuromyographie)\r\nElle confirme la nature neurogène du trouble. L’examen comporte deux temps distincts.\r\na. Électromyogramme (détection)\r\nL’électromyogramme (analyse à l’aiguille des tracés de repos et de contraction des différents muscles)\r\npermet de retrouver des potentiels de fibrillation au repos, un appauvrissement en unités motrices, une\r\naccélération de la fréquence des potentiels individualisés (sommation temporelle) et au maximum un\r\npotentiel à fréquence élevée (tracé simple) lors de la contraction (fig. 17.1). Il peut donner une\r\nindication topographique (tronculaire, radiculaire, diffuse) et confirme l’absence de signes\r\nmyogènes (richesse exagérée des tracés pour un faible effort de contraction, potentiels de faible\r\namplitude très polyphasiques).\r\nb. Mesure des vitesses de conduction (stimulodétection)\r\nLa mesure des vitesses de conduction reflète le processus histopathologique :\r\n– neuropathies démyélinisantes : ralentissement diffus des vitesses de conduction motrices et\r\nsensitives (fig. 17.2), allongement des ondes tardives F et des latences distales motrices ; il peut\r\nexister un aspect de bloc de conduction moteur (rapport diminué entre l’amplitude obtenue par\r\nstimulation proximale et celle obtenue par stimulation distale) notamment dans les neuropathies\r\ncanalaires et les polyradiculonévrites (fig. 17.3) ; ces anomalies sont localisées dans les\r\nmononeuropathies multiples et les compressions ; '),
(19, 'La bronchite chronique', ' La bronchite chronique est l''inflammation et la sécrétion exagérée au niveau des muqueuses des bronches (couche de cellules protégeant l''intérieur des bronches au contact de l''air).', 1, 5, ' La bronchite chronique est l''inflammation et la sécrétion exagérée au niveau des muqueuses des bronches (couche de cellules protégeant l''intérieur des bronches au contact de l''air).\r\n<br/><br/>\r\n La bronchite chronique est l''inflammation et la sécrétion exagérée au niveau des muqueuses des bronches (couche de cellules protégeant l''intérieur des bronches au contact de l''air).\r\n<br/><br/>\r\n La bronchite chronique est l''inflammation et la sécrétion exagérée au niveau des muqueuses des bronches (couche de cellules protégeant l''intérieur des bronches au contact de l''air).'),
(20, 'La sacapulo-thoracique', 'La sacapulo-thoracique articule l’omoplate et la cage thoracique.', 1, 10, 'L’épaule est une articulation complexe qui met en jeu en fait deux articulations : la sacapulo-thoracique et la gléno-humérale.\r\n<br/><br/>\r\nLa sacapulo-thoracique articule l’omoplate et la cage thoracique. Il s’agit d’une articulation serrée qui fait pivoter l’omoplate selon un arc de cercle dans le plan frontal et sert à amorcer l’écarté du bras (abduction) ; le grill costal et l’omoplate sont intriqués et fixés par des muscles puissants.\r\n<br/><br/>\r\nLa gléno-humérale met en jeu l’extrémité supérieure de l’humérus par l’intermédiaire de la tête humérale qui est sphérique et l’omoplate par l’intermédiaire de la glène qui est creuse concave.\r\n<br/><br/>\r\nLa glène est agrandie comme le cotyle par un bourrelet glénoîdien qui est à la périphérie.\r\n<br/><br/>\r\nComme pour toute articulation, les surfaces osseuses sont recouvertes de cartilage articulaire et des ligaments relient les extrêmités .\r\n<br/><br/>\r\nLes muscles sont très nombreux dans l’épaule :\r\n<br/><br/>\r\nLes muscles rotateurs de l’épaule partent de l’omoplate et s’insèrent sur l’extrémité supérieure de l’humérus appelée trochiter. Les rotateurs externes et starters de l’abduction sont :\r\n<br/><br/>\r\n- le sus-épineux qui s’insert à la partie postérieure de l’omoplate au-dessus d’un renflement appelé épine de l’omoplate ;\r\n<br/><br/>\r\n- le sous-épineux qui s’insert sous l’épine de l’omoplate ;\r\n<br/><br/>\r\n- le petit rond qui est juste sous le sous-épineux.\r\n<br/><br/>\r\nLe muscle qui assure la rotation interne de l’épaule s’appelle le sous-scapulaire.\r\n<br/><br/>\r\nUn tendon appelé long biceps part du sommet de la glène et se dirige vers le bras dans une tranchée naturelle de la partie antérieure de l’extrémité de l’humérus, la gouttière bicipitale.\r\n<br/><br/>\r\nTous ces muscles rotateurs sont prolongés par des tendons applatis recouvrant complètement la tête de l’humérus et formant la coiffe des rotateurs très importante dans la pathologie de l’épaule.\r\n<br/><br/>\r\nL’omoplate est prolongé en externe par une expansion appelée acromion qui se situe juste au- dessus de la coiffe des rotateurs.\r\n<br/><br/>\r\nCette coiffe glisse sous l’acromion par l’intermédiaire d’une poche synoviale appelée bourse séreuse sous-acromio-deltoïdienne.\r\n<br/><br/>\r\nAu dessus de cette articulation, le muscle principal abducteur est le deltoïde.\r\n<br/><br/>\r\nCe muscle très puissant chapote l’épaule en partant de l’acromion et en s’insérant sur la face externe de l’humérus, le V deltoïdien. Il permet l’abduction complète de l’épaule.\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

CREATE TABLE `favoris` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cours_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `cours_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `history`
--

INSERT INTO `history` (`id`, `cours_id`, `user_id`, `date`) VALUES
(16, 1, 12, '0000-00-00'),
(17, 2, 12, '0000-00-00'),
(18, 4, 12, '0000-00-00'),
(19, 7, 12, '0000-00-00'),
(20, 8, 12, '0000-00-00'),
(21, 12, 12, '0000-00-00'),
(22, 6, 12, '0000-00-00'),
(23, 15, 12, '0000-00-00'),
(24, 16, 12, '0000-00-00'),
(25, 2, 14, '0000-00-00'),
(26, 1, 14, '0000-00-00'),
(27, 14, 14, '0000-00-00'),
(28, 7, 14, '0000-00-00'),
(29, 15, 14, '0000-00-00'),
(30, 3, 14, '0000-00-00'),
(31, 6, 14, '0000-00-00'),
(32, 17, 14, '0000-00-00'),
(33, 16, 14, '0000-00-00'),
(34, 12, 14, '0000-00-00'),
(35, 20, 14, '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `matiere`
--

INSERT INTO `matiere` (`id`, `name`) VALUES
(1, 'philosophie'),
(2, 'maths'),
(3, 'pneumologie'),
(4, 'science');

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `tags`
--

INSERT INTO `tags` (`id`, `name`, `color`) VALUES
(1, 'cardiologie', 'red'),
(2, 'psychologie', 'blue'),
(3, 'neurologie', 'green'),
(4, 'pharmacologie', 'green'),
(5, 'poumon', 'red'),
(6, 'coeur', 'yellow'),
(7, 'medicament', 'purple'),
(8, 'nerf', 'blue'),
(9, 'orl', 'red'),
(10, 'epaule', 'yellow'),
(11, 'articulation', 'purple');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `mail` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `universite` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `mail`, `password`, `universite`) VALUES
(12, 'admin@admin', '99adc231b045331e514a516b4b7680f588e3823213abe901738bc3ad67b2f6fcb3c64efb93d18002588d3ccc1a49efbae1ce20cb43df36b38651f11fa75678e8', 'univ'),
(13, 'root@root', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', 'paris 2'),
(14, 'root@admin', '41443ab7fcdab584d3c1ed7181bf6ac260766d8f5d31348eff2259a1d26809c2b57cb16ed0180ced4be595b316701ad4f6749e3ab139454a7733a5ee4bdbdaef', 'lyon 3'),
(15, 'test@test', 'ee26b0dd4af7e749aa1a8ee3c10ae9923f618980772e473f8819a5d4940e0db27ac185f8a0e1d5f84f88bc887fd67b143732c304cc5fa9ad8e6f57f50028a8ff', 'Paris 4');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `favoris`
--
ALTER TABLE `favoris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT pour la table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;