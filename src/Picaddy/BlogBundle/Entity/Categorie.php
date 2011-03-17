<?

namespace Picaddy\BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @orm:Entity
 * @orm:Table(name="categorie")
 */
class Categorie
{
    /**
     * @orm:Id
     * @orm:Column(type="integer")
     * @orm:GeneratedValue(strategy="AUTO")
     *
     * @var integer $id
     */
    protected $id;

    /**
     * @orm:Column(type="string",length="255",name="libelle")
     *
     * @var string $nom
     */
    protected $libelle;

    /**
     * @orm:OneToMany(targetEntity="Article",mappedBy="categorie")
     *
     * @var ArrayCollection $articles
     *
     */
    protected $articles;

    /**
     *  Constructeur de notre objet categorie
     */
    public function __construct()
    {
        //On initialise notre liste d'articles
        $this->articles = new ArrayCollection();

    }

    public function getLibelle()
    {
        return $this->libelle;
    }

    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }


}



?>
