<?php namespace FI\Storage\Eloquent\Repositories;

use \FI\Storage\Eloquent\Models\QuoteItem;

class QuoteItemRepository implements \FI\Storage\Interfaces\QuoteItemRepositoryInterface {

	public function find($id)
	{
		return QuoteItem::find($id);
	}

	public function findByQuoteId($quote_id)
	{
		return QuoteItem::where('quote_id', $quote_id)->get();
	}
	
	public function create($input)
	{
		return QuoteItem::create($input)->id;
	}
	
	public function update($input, $id)
	{
		$quoteItem = QuoteItem::find($id);
		$quoteItem->fill($input);
		$quoteItem->save();
	}
	
	public function delete($id)
	{
		QuoteItem::destroy($id);
	}
	
}