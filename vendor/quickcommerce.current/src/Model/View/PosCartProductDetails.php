<?php

namespace QuickCommerce\Model\View;

use QuickCommerce\Model\PosAbstractEntity;
use QuickCommerce\Model\Core\Checkout\PosCartProduct;

class PosCartProductDetails extends PosCartProduct {
	/**
	 * Indicates if the cart product requires shipping
	 * @var boolean
	 */
	protected $shipping;
	
	/**
	 * The server image path for this cart product
	 * @var string
	 */
	protected $image;
	
	/**
	 * Indicates if the stock is updated for this cart product
	 * @var boolean
	 */
	protected $updateStock;
	
	public function getShipping() {
		return $this->shipping;
	}
	public function setShipping($shipping) {
		$this->shipping = $shipping;
		return $this;
	}
	public function getImage() {
		return $this->image;
	}
	public function setImage($image) {
		$this->image = $image;
		return $this;
	}
	
	public function cloneParent(PosCartProduct $parent) {
		// copy the parent values
		foreach ($parent as $property => $value) {
			$method = sprintf('set%s', ucwords($property));
			$this->$method($value);
		}
	}
	public function getUpdateStock() {
		return $this->updateStock;
	}
	public function setUpdateStock($updateStock) {
		$this->updateStock = $updateStock;
		return $this;
	}
}